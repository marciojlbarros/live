<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function create()
    {
        return view('post-create');
    }

    public function edit(Post $post)
    {
        return view('post-edit', ['post' => $post]);
    }
}
