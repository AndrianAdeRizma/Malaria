<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Pasien;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Training;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        Pasien::factory(10)->create();
        Training::factory(10)->create();

        User::factory()->create([
            // 'name' => 'Jhon',
            'email' => 'Jhon@gmail.com',
            'role'  => 'Admin',
        ]);

        // Training::factory()->create([
        //    'demam'  => 'Rendah',
        //    'sakit_kepala' => 'Ringan',
        //    'mengigil' => 'Iya',
        //    'berkeringat' => 'iya',
        //    'mual' => 'Sering',
        //    'diagnosa' => 'Positif',
        // ]);
    }
}
