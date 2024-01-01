<?php

namespace Database\Seeders;

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


        User::create([
            'first_name' => 'John',
            'last_name' => 'Doe',
            'role' => 'admin',
            'email' => 'john.doe@example.com',
            'password' => bcrypt('password'),
        ]);

        Resource::create([
            'type' => 'HOSPITAL',
            'name' => 'City Hospital',
            'description' => 'A leading hospital in the city',
            'location' => 'Karachi',
            'contact' => '123-4567890',
            'email' => 'info@cityhospital.com',
        ]);
        Resource::create([
            'type' => 'HOSPITAL',
            'name' => 'Green Hospital',
            'description' => 'Providing quality healthcare services',
            'location' => 'Lahore',
            'contact' => '987-6543210',
            'email' => 'info@greenhospital.com',
        ]);
        Resource::create([
            'type' => 'HOSPITAL',
            'name' => 'Sunset Medical Center',
            'description' => 'Committed to patient well-being',
            'location' => 'Islamabad',
            'contact' => '456-7890123',
            'email' => 'info@sunsetmedicalcenter.pk',
        ]);
        Resource::create([
            'type' => 'HOSPITAL',
            'name' => 'Unity Hospital',
            'description' => 'Ensuring health and unity',
            'location' => 'Rawalpindi',
            'contact' => '789-0123456',
            'email' => 'info@unityhospital.pk',
        ]);

        Resource::create([
            'type' => 'EDUCATIONAL_INSTITUTE',
            'name' => 'Bright Academy',
            'description' => 'Fostering academic excellence',
            'location' => 'Karachi',
            'contact' => '123-4567890',
            'email' => 'info@brightacademy.edu.pk',
        ]);

        Resource::create([
            'type' => 'EDUCATIONAL_INSTITUTE',
            'name' => 'Blue Ridge School',
            'description' => 'A place for holistic education',
            'location' => 'Lahore',
            'contact' => '987-6543210',
            'email' => 'info@blueridgeschool.pk',
        ]);

        Resource::create([
            'type' => 'EDUCATIONAL_INSTITUTE',
            'name' => 'Sunshine College',
            'description' => 'Nurturing talents and skills',
            'location' => 'Islamabad',
            'contact' => '456-7890123',
            'email' => 'info@sunshinecollege.edu.pk',
        ]);

        Resource::create([
            'type' => 'EDUCATIONAL_INSTITUTE',
            'name' => 'Pinnacle University',
            'description' => 'A gateway to knowledge and success',
            'location' => 'Rawalpindi',
            'contact' => '789-0123456',
            'email' => 'info@pinnacleuniversity.edu.pk',
        ]);



    }
}
