<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function addComment(Post $post)
    {
//        dd(request()->all());

        $this->validate(request(), [
            'body' => 'required|min:3'
        ]);

        $post->comments()->create([
            'body' => request('body'),
            'user_id' => auth()->id()
        ]);

        return back();
    }
}
