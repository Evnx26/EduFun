<?php

namespace App\Http\Controllers;

use App\Models\writer;
use Illuminate\Http\Request;

class writerController extends Controller
{
    public function index(){
        $writers = writer::all();
        return view('writers.index', [
            'writers' => $writers
        ]);
    }

    public function show(writer $writer){
        $posts = $writer->posts()->get();
        return view('writers.show', [
            'writer' => $writer,
            'posts' => $posts
        ]);
    }
}
