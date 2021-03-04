<?php

use Illuminate\Support\Facades\Route;


Route::get('/{post:slug}', 'HomeController@index');
