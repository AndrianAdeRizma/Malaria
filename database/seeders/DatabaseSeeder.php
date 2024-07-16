<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Pasien;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        User::factory()->create([
            'name' => 'Jhon',
            'email' => 'Jhon@gmail.com',
        ]);
    }
}
