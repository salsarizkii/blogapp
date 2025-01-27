<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home',['tittle' => 'Homepage']);
});

Route::get('/about', function () {
    return view('about',['nama' => 'Rizki', 'tittle' => 'About Us']);
});

Route::get('/blog', function () {
    return view('blog',['tittle' => 'Blogpage']);
});
Route::get('/contact', function () {
    return view('contact',['tittle' => 'Contact Us']);
});

