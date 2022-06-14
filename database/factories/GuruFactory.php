<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Guru;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Guru>
 */
class GuruFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'kdguru' => $this->faker->numberBetween(1111, 9999),
            'nama' => $this->faker->name,
            'tmp_lahir' => $this->faker->country,
            'tal_lahir' => $this->faker->dateTimeBetween('1990-01-01', '2012-12-31')->format('d/m/Y'),
            'alamat' => $this->faker->address,
            'nohp' => $this->faker->phoneNumber,
            'email' => $this->faker->freeEmail,
        ];
    }
}
