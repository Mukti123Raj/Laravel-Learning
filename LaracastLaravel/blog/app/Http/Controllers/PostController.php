<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;


use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class PostController extends Controller
{
    public function index(){

        return view("posts.index", ["posts" =>Post::latest()->filter(request(['search','category']))->paginate(10)->withQueryString()

    // return view("posts.index", ["posts" =>Post::latest()->filter(request(['search','category']))->get()
]);
    }

    public function show(Post $post){
        return view("posts.show", ['post' => $post]);
    }


}
