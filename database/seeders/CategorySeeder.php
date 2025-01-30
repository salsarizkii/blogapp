<?php

namespace Database\Seeders;

use App\Models\Category;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create(
            [
                'name' => 'Website Design',
                'slug' => 'website-design'
            ]
        );

        Category::create(
            [
                'name' => 'UI/UX Design',
                'slug' => 'UIUX-design'
            ]
        );

        Category::create(
            [
                'name' => 'Machine Learning',
                'slug' => 'machine-learning'
            ]
        );

        Category::create(
            [
                'name' => 'Mobile Development',
                'slug' => 'mobile-development'
            ]
        );
    }
}
