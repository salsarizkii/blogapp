<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home',['tittle' => 'Homepage']);
});

Route::get('/about', function () {
    return view('about',['nama' => 'Rizki', 'tittle' => 'About Us']);
});

Route::get('/blog', function () {
    return view('blog',['tittle' => 'Blogpage', 'blog'  => [
        [
            'id' => 1,
            'slug' => 'this-is-first-blog',
            'title' => 'This is First blog', 
            'author' => 'Salsa Rizki',
            'body' => 'This is body of first blog. Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
            Amet explicabo illo possimus assumenda id odio officiis ipsum quisquam molestias 
            architecto, atque quam? Nihil, error aliquam enim sequi consectetur aut ipsam.'
        ],
        [
            'id' => 2,
            'slug' => 'this-is-second-blog',
            'title' => 'This is second blog', 
            'author' => 'Salsa Rizki',
            'body' => 'This is body of second blog. Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
            Amet explicabo illo possimus assumenda id odio officiis ipsum quisquam molestias 
            architecto, atque quam? Nihil, error aliquam enim sequi consectetur aut ipsam.'
        ]

    ] ]);
});

Route::get('/blog/{id}', function ($id) {
    $blog = [
        [
            'id' => 1,
            'slug' => 'this-is-first-blog',
            'title' => 'This is First blog', 
            'author' => 'Salsa Rizki',
            'body' => 'This is body of first blog. Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
            Amet explicabo illo possimus assumenda id odio officiis ipsum quisquam molestias 
            architecto, atque quam? Nihil, error aliquam enim sequi consectetur aut ipsam.'
        ],
        [
            'id' => 2,
            'slug' => 'this-is-second-blog',
            'title' => 'This is second blog', 
            'author' => 'Salsa Rizki',
            'body' => 'This is body of second blog. Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
            Amet explicabo illo possimus assumenda id odio officiis ipsum quisquam molestias 
            architecto, atque quam? Nihil, error aliquam enim sequi consectetur aut ipsam.'
        ]

        ];

    $eachblog = Arr::first($blog, function($eachblog) use ($id) {
        return $eachblog['id'] == $id;
    });

    return view('eachblog', ['tittle' => 'single post', 'eachblog' => $eachblog]);
});


Route::get('/contact', function () {
    return view('contact',['tittle' => 'Contact Us']);
});

