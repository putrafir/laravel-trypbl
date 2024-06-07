<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pendaftar>
 */
class PendaftarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'namaLengkap' => fake()->name(),
            'jenisKelamin' => fake()->randomElement(['laki-laki', 'perempuan']),
            'tanggalLahir' => fake()->dateTimeBetween('-15 years', '-10 years')->format('Y-m-d'),
            'alamat' => fake()->address(),
            'email' => fake()->email(),
            'kota' => fake()->city(),
            'nisn' => fake()->unique()->numerify('##########'),
            'tempatLahir' => fake()->city(),
            'agama' => 'islam',
            'provinsi' => fake()->state(),
            'telepon' => fake()->phoneNumber(),
            'parent_dbs_id' => fake()->unique()->numberBetween(1, 20),
            'asalSekolah_id' => fake()->numberBetween(1, 20),
            'berkas_id' => fake()->numberBetween(1, 2)
        ];
    }
}
