<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostCommentsController extends Controller
{
    public function store(Post $post){

        // Validate the request data
        request()->validate([
            'body' => 'required',
        ]);

        $post->comments()->create([
            'user_id' => auth()->id(),
            'body' => request('body'),
        ]);

        return back();
    }
}
