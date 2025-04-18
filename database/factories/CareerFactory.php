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
            'position' => $this->faker->jobTitle,
            'typeofwork' => $this->faker->randomElement(['Fulltime', 'Part-time', 'Self-employee', 'Freelance', 'contract', 'Internship']),
            'current_job' => $this->faker->company,
            'start_date' => $this->faker->date(),
            'end_date' => $this->faker->date(),
            'location' => 'https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json',  // URL default
            'location_type' => $this->faker->randomElement(['On site', 'Combined', 'Long distance']),
            'employment_type' => $this->faker->randomElement(['full-time', 'part-time', 'internship']),
            'description' => $this->faker->paragraph,
            'posted_at' => $this->faker->optional()->dateTimeThisYear(), // Nullable timestamp
        ];
    }
}
