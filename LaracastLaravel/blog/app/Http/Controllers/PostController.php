<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;


use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;
use Symfony\Component\HttpFoundation\Response;

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

    public function create(){
        // if(auth()->guest()){
        //    abort(Response::HTTP_FORBIDDEN);
        // }
        // if(auth()->user()?->usernam !== 'Mukti Raj' ){
        //    abort(Response::HTTP_FORBIDDEN);
        // }

        return view('posts.create');
    }

    public function store(Request $request){
        request()->validate([
            'title' => 'required',
            'slug' => 'required|unique:posts,slug',
            'excerpt' => 'required',
            'body' => 'required',
            'category_id' => 'required|exists:categories,id'
        ]);

        $attributes['user_id'] = auth()->id();

        Post::create(array_merge($request->all(), $attributes));

        return redirect('/')->with('success', 'Post created successfully');

    }

}
