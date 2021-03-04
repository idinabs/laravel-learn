<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class HomeController extends Controller
{
    public function index(){

        return view('home');
    }

    public function post(){

        $posts =  Post::Paginate(3);

        return view('post', compact('posts'));
    }

    public function add(){

        return view('add');

    }

    public function sending(Request $request){
        
        $post = new Post;

        $post->title = $request->input('title');
        
        $post->slug = \Str::slug($request->input('title'));

        $post->body = $request->input('body');

        $post->save();

    }
}
