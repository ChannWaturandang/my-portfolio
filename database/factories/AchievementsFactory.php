<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class AchievementsFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(3), // Judul sertifikasi
            'company' => fake()->company(), // Penerbit sertifikasi
            'publication_date' => fake()->date(), // Tanggal terbit
            'expiration_date' => fake()->optional()->date(), // Bisa null
            'credential_id' => fake()->optional()->uuid(), // ID sertifikat opsional
            'credential_url' => fake()->optional()->url(), // URL sertifikat opsional
            'description' => fake()->paragraph(), // Deskripsi
            'image' => fake()->imageUrl(200, 200, 'education', true, 'certificate'), // Gambar sertifikasi
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
