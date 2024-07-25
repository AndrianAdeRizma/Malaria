<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Training>
 */
class TrainingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'demam' => fake()->randomElement(['Rendah','Sedang','Tinggi','Sangat Tinggi']),
            'sakit_kepala' => fake()->randomElement(['Ringan','Sedang','Berat']),
            'mengigil' => fake()->randomElement(['Iya','Tidak']),
            'berkeringat' => fake()->randomElement(['iya','Tidak']),
            'mual' => fake()->randomElement(['Sering','Tidak Sering']),
            'diagnosa' => fake()->randomElement(['Sering','Tidak Sering']),
        ];
    }
}
