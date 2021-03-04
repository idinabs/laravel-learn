<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;


class HomeController extends Controller
{
    public function index(Post $post) {
        
        
        return view('welcome', compact('post'));
    
    }
}
