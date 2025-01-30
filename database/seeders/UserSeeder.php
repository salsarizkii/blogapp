<?php

namespace Database\Seeders;

use App\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'John Doe',
            'username' => 'johndoe', // Fixed typo: 'usernam' -> 'username'
            'email' => 'john@example.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10) // Fixed: 'str_random' -> 'Str::random'
        ]);

        User::factory(12)->create();
    }
}
