<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AnalysesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $status = ['1 assinar', "2 aprovar","3 vizualizador"];

        return [
            'status' => $status[random_int(0,2)],
            'viewers' => $this->faker->randomDigitNot(2),
            'id_document' => $this->faker->randomDigitNot(2),
            'id_signature' => $this->faker->randomDigitNot(2),
        ];
    }
}
