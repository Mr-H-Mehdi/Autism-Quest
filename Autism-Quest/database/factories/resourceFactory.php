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
    public function definition(): array
    {
        $type = $this->faker->randomElement(['EDUCATIONAL_INSTITUTE', 'HOSPITAL']);

        return [
            'type' => $type,
            'name' => $this->faker->word,
            'description' => $this->faker->sentence,
            'location' => $this->faker->word,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
