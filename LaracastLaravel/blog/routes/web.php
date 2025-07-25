<?php

use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PostCommentsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Middleware\MustBeAdministrator;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use App\Services\newsletter;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\ValidationException;
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

Route::post('posts/{post:slug}/comments', [PostCommentsController::class, 'store' ])->middleware('auth');

Route::post('newsletter', NewsletterController::class);


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


Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('login', [SessionsController::class, 'create'])->middleware('guest')->name('login');
Route::post('login', [SessionsController::class, 'store'])->middleware('guest');
Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');


Route::middleware('mustBeAdministrator')->group(function () {
    Route::get('admin/post/create', [PostController::class, 'create']);
    Route::post('admin/posts', [PostController::class, 'store']);
});
