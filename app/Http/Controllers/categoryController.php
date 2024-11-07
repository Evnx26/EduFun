<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\post;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    public function index(category $category)
    {
        $posts = post::where('category_id', $category->id)->get();
        return view('category', [
            'category' => $category,
            'posts' => $posts
        ]);
    }
}
