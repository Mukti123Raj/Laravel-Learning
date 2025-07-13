<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $with = ['category', 'author'];

    protected function scopeFilter($query, array $filters){
        $query->when($filters['search'] ?? false, function($query, $search) {
            $query
                ->where('title', 'like', '%'.request('search').'%')
                ->orWhere('body', 'like', '%'.request('search').'%');

        });




    }
    protected $fillable = ['title', "excerpt", "body", "slug", "category_id"];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, "user_id");
    }
}
