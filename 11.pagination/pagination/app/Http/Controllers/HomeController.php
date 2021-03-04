<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class HomeController extends Controller
{
    public  function index(){

        return view('home');
    }

    public  function post(){

        $posts =  Post::Paginate(6);

        return view('post', compact('posts'));
    }
}
