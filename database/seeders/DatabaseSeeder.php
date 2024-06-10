<?php

namespace Database\Seeders;

use App\Models\asalSekolah;
use App\Models\Berkas;
use App\Models\ParentDb;
use App\Models\Pendaftar;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        AsalSekolah::factory(20)->create();

        ParentDb::factory(20)->create();
        // Berkas::factory(20)->create();
        Pendaftar::factory(20)->create();
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
