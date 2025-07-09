<?php

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;

Route::get('/', function (){

    // $document =YamlFrontMatter::parseFile(
    //     resource_path("posts/my-fourth-post.html")
    // );

    // dd($document->date);

    DB::listen(function($query){
        logger($query->sql, $query->bindings);
    });

     $posts = Post::with('category')->get();



    return view("posts", ["posts" => $posts]);
});

Route::get("posts/{post:slug}", function(Post $post){

    // find a post by its slug and pass it to a view called post



    return view("post", ['post' => $post]);

    // if(!file_exists($path =  __DIR__ . "/../resources/posts/{$slug}.html" )){
    //     // dd("File not found: {$path}");
    //     return redirect("/");
    // }

    // $post =cache()->remember("posts.{$slug}", 5, fn() => file_get_contents($path));

    // // $post = file_get_contents($path);
    // return view("post",["post"=> $post]);
});

Route::get('categories/{category:slug}', function(Category $category){
    $posts = Post::all();
    return view("posts", ["posts" => $category->posts]);
});
