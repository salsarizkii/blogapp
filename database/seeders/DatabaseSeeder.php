<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Blog;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $mine = User::create([
            'name' => 'John Doe',
            'username' => 'johndoe', // Fixed typo: 'usernam' -> 'username'
            'email' => 'john@example.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10) // Fixed: 'str_random' -> 'Str::random'
        ]);

        // Ensure factory methods are correct and compatible
        User::factory(123)->create();
        Category::factory(7)->create();

        Blog::factory(123)->recycle([
            User::factory(12)->create(),
            $mine,
            Category::factory(7)->create()
        ])->create();
    }
}
