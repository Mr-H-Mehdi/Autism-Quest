<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends 
 */
class resourceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    private static $counter = 0;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Increment the counter for each created instance
        self::$counter++;

        // Determine the type based on the counter value
        $type = self::$counter % 2 === 0 ? 'HOSPITAL' : 'EDUCATIONAL_INSTITUTE';
        
        // Values for the data
        $realValues = [
            'HOSPITAL' => [
                [
                    'name' => 'City Hospital',
                    'description' => 'A leading hospital in the city',
                    'location' => 'Karachi',
                    'contact' => '123-4567890',
                    'email' => 'info@cityhospital.com',
                ],
                [
                    'name' => 'Green Hospital',
                    'description' => 'Providing quality healthcare services',
                    'location' => 'Lahore',
                    'contact' => '987-6543210',
                    'email' => 'info@greenhospital.com',
                ],
                [
                    'name' => 'Sunset Medical Center',
                    'description' => 'Committed to patient well-being',
                    'location' => 'Islamabad',
                    'contact' => '456-7890123',
                    'email' => 'info@sunsetmedicalcenter.pk',
                ],
                [
                    'name' => 'Unity Hospital',
                    'description' => 'Ensuring health and unity',
                    'location' => 'Rawalpindi',
                    'contact' => '789-0123456',
                    'email' => 'info@unityhospital.pk',
                ],
            ],
            'EDUCATIONAL_INSTITUTE' => [
                [
                    'name' => 'Bright Academy',
                    'description' => 'Fostering academic excellence',
                    'location' => 'Karachi',
                    'contact' => '123-4567890',
                    'email' => 'info@brightacademy.edu.pk',
                ],
                [
                    'name' => 'Blue Ridge School',
                    'description' => 'A place for holistic education',
                    'location' => 'Lahore',
                    'contact' => '987-6543210',
                    'email' => 'info@blueridgeschool.pk',
                ],
                [
                    'name' => 'Sunshine College',
                    'description' => 'Nurturing talents and skills',
                    'location' => 'Islamabad',
                    'contact' => '456-7890123',
                    'email' => 'info@sunshinecollege.edu.pk',
                ],
                [
                    'name' => 'Pinnacle University',
                    'description' => 'A gateway to knowledge and success',
                    'location' => 'Rawalpindi',
                    'contact' => '789-0123456',
                    'email' => 'info@pinnacleuniversity.edu.pk',
                ],
            ],
        ];

        return [
            'type' => $type,
            'name' => $realValues[$type][self::$counter - 1]['name'],
            'description' => $realValues[$type][self::$counter - 1]['description'],
            'location' => $realValues[$type][self::$counter - 1]['location'],
            'contact' => $realValues[$type][self::$counter - 1]['contact'],
            'email' => $realValues[$type][self::$counter - 1]['email'],
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
