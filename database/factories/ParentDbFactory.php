<?php

namespace Database\Factories;

use App\Models\Pendaftar;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ParentDb>
 */
class ParentDbFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // $nisn = Pendaftar::pluck('nisn')->random();
        return [
            'namaAyah' => fake()->name(),
            'nikAyah' => fake()->unique()->numerify('##########'),
            'pekerjaanAyah' => fake()->jobTitle(),
            'teleponAyah' => fake()->phoneNumber(),
            'alamatAyah' => fake()->address(),
            'usiaAyah' => fake()->numberBetween(40, 80),

            'namaIbu' => fake()->name(),
            'nikIbu' => fake()->unique()->numerify('##########'),
            'pekerjaanIbu' => fake()->jobTitle(),
            'teleponIbu' => fake()->phoneNumber(),
            'alamatIbu' => fake()->address(),
            'usiaIbu' => fake()->numberBetween(40, 80),

        ];
    }
}
