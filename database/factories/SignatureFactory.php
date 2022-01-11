<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SignatureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'q_signature_characters' => $this->faker->randomDigitNot(2),
            'default_subscription' => $this->faker->name(),
            'subscription_usage' => $this->faker->randomDigitNot(2),
        ];
    }
}
