<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\berkas>
 */
class BerkasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ijazah' => fake()->imageUrl(360, 360, 'animals', true),
            'pasFoto' => fake()->imageUrl(360, 360, 'animals', true),
            'kartuKeluarga' => fake()->imageUrl(360, 360, 'animals', true),
            'aktaKelahiran' => fake()->imageUrl(360, 360, 'animals', true),
        ];
    }
}
