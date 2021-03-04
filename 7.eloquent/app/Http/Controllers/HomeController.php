<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class HomeController extends Controller
{
    public function show($slug){
       
        $post = Post::where('slug',$slug)->first();

        if(!$post){
            abort('404');
        }

        return View('welcome', compact('post'));

    }
}
