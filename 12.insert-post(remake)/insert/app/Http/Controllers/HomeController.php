<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Home;

class HomeController extends Controller
{
    public function index(){

        
        return view('welcome');
    }

    public function post(){

        // $post = Home::where('title', $slug)->firstOrFail();
        $post = Home::latest()->Paginate(3);
        return view('post', compact('post'));
    }

    public function add(){

        return view('add');
    }

    public function send(Request $request){

        $post = new Home;

        $post->title = $request->title;
        
        $post->body = $request->body;

        $post->save();

        return redirect('/post/');
    }

}
