<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Resource;
use App\Models\userStory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(5)->create();

        userStory::factory(6)->create();

        Resource::factory(10)->create();

        User::create([
            'first_name' => 'John',
            'last_name' => 'Doe',
            'role' => 'admin',
            'email' => 'john.doe@example.com',
            'password' => bcrypt('password'),
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
