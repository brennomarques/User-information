<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DocumentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $size = ['1 MB', "3 MB","4 MB", "6 MB"];

        return [
            'title' => $this->faker->word(),
            'subscription_numbers' => $this->faker->randomDigitNot(2),
            'signature_responsible' => $this->faker->name(),
            'number_page' => $this->faker->randomDigitNot(2),
            'document_size' =>  $size[random_int(0,2)],
        ];
    }
}
