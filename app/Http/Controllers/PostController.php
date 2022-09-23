<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function show(Post $post)
    {
        //$post = Post::find($postId);

        return view('post', compact('post'));
    }
}
