<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;

Route::get('/', function (){

    // $document =YamlFrontMatter::parseFile(
    //     resource_path("posts/my-fourth-post.html")
    // );

    // dd($document->date);


     $posts = Post::all();



    return view("posts", ["posts" => $posts]);
});

Route::get("posts/{post}", function($id){

    // find a post by its slug and pass it to a view called post



    return view("post", ['post' => Post::findOrFail($id)]);

    // if(!file_exists($path =  __DIR__ . "/../resources/posts/{$slug}.html" )){
    //     // dd("File not found: {$path}");
    //     return redirect("/");
    // }

    // $post =cache()->remember("posts.{$slug}", 5, fn() => file_get_contents($path));

    // // $post = file_get_contents($path);
    // return view("post",["post"=> $post]);
});
