<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DummyPasien>
 */
class DummyPasienFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'no_rkm_medik' => mt_rand(000001, 999999),
            'nama' => $this->faker->name(),
            'tempatLahir' => $this->faker->city(),
            'tglLahir' => $this->faker->date(),
            'gender' => $this->faker->randomElement(['L', 'P']),
            'kewarganegaraan' => $this->faker->randomElement(['WNI', 'WNA'])
        ];
    }
}
