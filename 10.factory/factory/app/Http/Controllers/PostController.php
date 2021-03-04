<?php

namespace App\Http\Controllers;

use App\Post;


use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index($slug){

        $post = Post::where('slug', $slug)->firstOrFail();
        return view('welcome', compact('slug'));

    }
}
