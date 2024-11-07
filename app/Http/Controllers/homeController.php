<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;

class homeController extends Controller
{
    public function home(){
        $posts = post::limit(5)->get();
        return view('home', [
            'posts' => $posts
        ]);
    }
    
    public function aboutus()
    {
        return view('about');
    }

}
