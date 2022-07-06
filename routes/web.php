<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */
// Dashboard
Route::get('/dashboard', [SessionController::class, 'dashboard'])->name('dashboard')->middleware('auth');
// Add Post
Route::get('/create-post', [PostController::class, 'create'])->name('add-post')->middleware('auth');
Route::post('/create-post', [PostController::class, 'store'])->name('add-post')->middleware('auth');

// PostController::class
Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('/posts/{post:slug}', [PostController::class, 'show'])->name('post');
// CommentController::class
Route::post('/posts/{post:slug}/comments', [CommentController::class, 'addComment']);
// RegisterController::class
Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');
// SessionController::class
Route::get('login', [SessionController::class, 'login'])->middleware('guest');
Route::post('login', [SessionController::class, 'submitLogin'])->middleware('guest');
Route::get('logout', [SessionController::class, 'logout'])->middleware('auth');

//Route::get('/?category={category:slug}', function (Category $category) {
//
//    return view('posts', [
//        'posts' => $category->posts,
//        'currentCategory' => $category,
//        'categories' => Category::all()
//    ]);
//})->name('category');

//Route::get('/authors/{author:username}', function (User $author) {
//    return view('posts.index', [
//        'posts' => $author->posts
//    ]);
//})->name('author');
