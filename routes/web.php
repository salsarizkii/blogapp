<?php

use Illuminate\Support\Facades\Route;
use App\Models\eachblog;


Route::get('/', function () {
    return view('home',['tittle' => 'Homepage']);
});

Route::get('/about', function () {
    return view('about',['nama' => 'Rizki', 'tittle' => 'About Us']);
});

Route::get('/blog', function () {
    return view('blog',['tittle' => 'Blogpage', 'blog'  => eachblog::all()]);
});

Route::get('/blog/{slug}', function ($slug) {
    $eachblog = Arr::first(eachblog::all(), function($eachblog) use ($slug) {
        return $eachblog['slug'] == $slug;
    });

    return view('eachblog', ['tittle' => 'single post', 'eachblog' => $eachblog]);
});


Route::get('/contact', function () {
    return view('contact',['tittle' => 'Contact Us']);
});

