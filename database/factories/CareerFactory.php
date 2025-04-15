<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Career>
 */
class CareerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->jobTitle,
            'description' => $this->faker->paragraph(3),
            'requirements' => $this->faker->paragraph(2),
            'location' => $this->faker->city,
            'employment_type' => $this->faker->randomElement(['full-time', 'part-time', 'internship']),
            'posted_at' => now(),
        ];
    }
}
