<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'HomeController@index');
Route::get('/post', 'HomeController@post');
Route::get('/post/add', 'HomeController@add');
Route::post('/post/sending', 'HomeController@sending');

// Route::view('/upload', 'upload');
