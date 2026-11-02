<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
Route::view('/about', 'about');
Route::view('/projects', 'projects');
Route::view('/blog', 'blog');
Route::view('/contact', 'contact');