<?php

namespace App\Models;

class eachblog 
{
    public static function all(){
        return [
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
    }
    
    public static function find($slug):array
    {
        // return Arr::first(static::all(), function($eachblog) use ($slug) {
        //     return $eachblog['slug'] == $slug;
        // });

        $eachblog = Arr::first(static::all(), fn($eachblog) => $eachblog['slug'] == $slug);

        if( !$eachblog ){
            abort(404);
        }

        return $eachblog;
    }
};

