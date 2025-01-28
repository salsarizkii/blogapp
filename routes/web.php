<?php

use Illuminate\Support\Facades\Route;
use App\Models\Blog;


Route::get('/', function () {
    return view('home',['tittle' => 'Homepage']);
});

Route::get('/about', function () {
    return view('about',['nama' => 'Rizki', 'tittle' => 'About Us']);
});

Route::get('/blog', function () {
    return view('blog',['tittle' => 'Blogpage', 'blog'  =>Blog::all()]);
});

Route::get('/blog/{blog:slug}', function (Blog $blog) {
    // $eachblog = Blog::find($id);

    return view('eachblog', ['tittle' => 'single post', 'eachblog' => $blog]);
});


Route::get('/contact', function () {
    return view('contact',['tittle' => 'Contact Us']);
});

