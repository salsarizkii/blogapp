<?php

use Illuminate\Support\Facades\Route;
use App\Models\Blog;
use App\Models\Category;
use App\Models\User;


Route::get('/', function () {
    return view('home', ['tittle' => 'Homepage']);
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Rizki', 'tittle' => 'About Us']);
});

Route::get('/blog', function () {
    // $blog = Blog::with('author', 'category')->latest()->get();
    return view('blog', ['tittle' => 'Blogpage', 'blog'  => $blog]);
});

Route::get('/blog/{blog:slug}', function (Blog $blog) {
    // $eachblog = Blog::find($id);

    return view('eachblog', ['tittle' => 'single post', 'eachblog' => $blog]);
});

Route::get('/author/{user:username}', function (User $user) {
    // $blog = $user->blog->load('category', 'author');
    return view('blog', ['tittle' => count($user->blog) . ' Articles by ' . $user->name, 'blog' => $user->blog]);
});

Route::get('/category/{category:slug}', function (Category $category) {
    // $blog = $category->blog->load('category', 'author');
    return view('blog', ['tittle' =>  'Articles by ' . $category->name, 'blog' => $category->blog]);
});

Route::get('/contact', function () {
    return view('contact', ['tittle' => 'Contact Us']);
});
