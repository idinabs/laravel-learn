<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index($home){

        $post = \DB::table('posts')->where('title', $home)->first();
        if(!$post){
            abort('404');
        }

        return view('welcome', compact('home')); 

   }
}
