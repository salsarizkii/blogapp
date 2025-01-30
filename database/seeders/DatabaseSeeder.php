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

        // Ensure factory methods are correct and compatible
        $this->call([CategorySeeder::class, UserSeeder::class]);
        Blog::factory(123)->recycle([
            Category::all(),
            User::all()
        ])->create();
    }
}
