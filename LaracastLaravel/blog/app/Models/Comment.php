<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /** @use HasFactory<\Database\Factories\CommentFactory> */
    use HasFactory;

    protected $guarded = [];

    public function post(){
        return $this->belongsTo(Post::class);
    }

        public function author(){
        return $this->belongsTo(User::class, 'user_id');
    }

}
