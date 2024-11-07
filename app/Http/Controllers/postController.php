<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class postController extends Controller
{
    public function index(Post $post){
        return view('posts', [
            'post' => $post
        ]);
    }

    public function popular(){
        $posts = Post::orderBy('view_count', 'desc')->simplePaginate(3);
        return view('posts', [
            'posts' => $posts
        ]);
    }
}
