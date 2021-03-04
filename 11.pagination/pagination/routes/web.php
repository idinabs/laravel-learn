<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'HomeController@index');
Route::get('/post', 'HomeController@post');
// Route::view('/upload', 'upload');
