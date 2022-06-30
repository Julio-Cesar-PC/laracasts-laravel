<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;

use App\Models\Post;

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
// PostController::class
Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('/posts/{post:slug}', [PostController::class, 'show'])->name('post');
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
