<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
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

        return [
            'type' => $type,
            'name' => $this->faker->word,
            'description' => $this->faker->sentence,
            'location' => $this->faker->word,
            'contact' => $this->faker->phoneNumber,
            'email' => $this->faker->companyEmail,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
