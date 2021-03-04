<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Post;

class HomeController extends Controller
{
    public function index($slug){

        $post = Post::where('slug',$slug)->first();

        if(is_null($post)){
          abort(404);
        }

        return view('welcome', compact('post'));
    }
}
