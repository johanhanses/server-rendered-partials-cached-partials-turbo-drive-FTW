<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name(),
            'amount_in_cents' => $this->faker->numberBetween(10000, 100000),
            'paid_at' => $this->faker->optional()->dateTime,
        ];
    }
}
