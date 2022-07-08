<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create()
    {
        if (auth()->guest()) {
            return redirect('/login')->with('message', 'You must be logged in to create a post.');
        }
        return view('posts.create-post');
    }

    public function store()
    {
//        dd(request()->all());
        $attribute = request()->validate([
            'title' => 'required|max:255',
            'body' => 'required',
            'thumbnail' => 'required|image',
            'slug' => 'required|alpha_dash|max:255|unique:posts,slug',
            'excerpt' => 'required',
            'category_id' => 'required|exists:categories,id'
        ]);

        $attribute['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        $post = auth()->user()->posts()->create($attribute);

        return redirect('/')->with('message', 'Post created successfully');
    }

    public function index()
    {
        return view('posts.index', [
            'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(6)->withQueryString(),
        ]);
    }

    public function show(Post $post)
    {
        return view('posts.show', [
            'post' => $post
        ]);
    }
}
