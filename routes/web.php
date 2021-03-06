<?php

use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Models\Post;
use App\Services\Newsletter;
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

Route::post('newsletter', NewsletterController::class);
// myposts
Route::get('/myposts', [SessionController::class, 'myposts'])->name('myposts')->middleware('auth');
// PostController::class
Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('/posts/{post:slug}', [PostController::class, 'show'])->name('post');
// CommentController::class
Route::post('/posts/{post:slug}/comments', [CommentController::class, 'addComment']);
// RegisterController::class
Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');
// SessionController::class
Route::get('login', [SessionController::class, 'login'])->middleware('guest')->name('login');
Route::post('login', [SessionController::class, 'submitLogin'])->middleware('guest');
Route::get('logout', [SessionController::class, 'logout'])->middleware('auth');
// admin
Route::get('admin/posts', [AdminPostController::class, 'index'])->middleware('admin');
Route::get('admin/posts/{post}/edit', [AdminPostController::class, 'edit'])->middleware('admin');

Route::get('/admin/posts/create', [PostController::class, 'create'])->middleware('admin');
Route::post('/admin/posts', [PostController::class, 'store'])->middleware('admin');



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
