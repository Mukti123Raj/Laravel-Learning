<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterCcontroller;
use App\Http\Controllers\RegisterController;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;

// Route::get('/', function (){

//     // $document =YamlFrontMatter::parseFile(
//     //     resource_path("posts/my-fourth-post.html")
//     // );

//     // dd($document->date);

//     // DB::listen(function($query){
//     //     logger($query->sql, $query->bindings);
//     // });

//     //  $posts = Post::latest()->with('category', 'author')->get();



// });
Route::get('/', [PostController::class, 'index'])->name('home');


Route::get("posts/{post:slug}", [PostController::class, 'show'])->name('post');

// Route::get('categories/{category:slug}', function(Category $category){
//     $posts = Post::all();
//     return view("posts", ["posts" => $category->posts,
//     'currentCategory' => $category,
//     'categories' => Category::all(),


// ]);
// })->name('category');

// Route::get('authors/{author}', function(User $author){
//     return view("posts", ["posts" => $author->posts->load(['category', 'author'])]);
// });

// Route::get('authors/{author:username}', function(User $author){
//     return view("posts.index", ["posts" => $author->posts
// ]);
// });
// Route::get('authors/{author:username}', function(User $author){
//     return view("posts", ["posts" => $author->posts->load(['category', 'author'])]);
// });


Route::get('register', [RegisterController::class, 'create']);
Route::post('register', [RegisterController::class, 'store']);
