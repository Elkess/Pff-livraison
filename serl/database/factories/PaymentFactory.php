<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payment>
 */
class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'PaymentDate' => $this->faker->dateTimeBetween('-1 month', 'now'),
            'amount' => $this->faker->randomFloat(2, 10, 1000),
            'status' => $this->faker->randomElement(['Pending', 'Failed', 'Refunded', 'Authorized', 'Voided', 'Processing', 'Chargeback', 'On hold']),
            'card_number'  => $this->faker->numberBetween(1000000000000000, 9999999999999999),
            'expiry_date' => $this->faker->numberBetween(10,99),
            'cvv' => $this->faker->numberBetween(100, 999),
            'client_id' => fake(), 
        ];
    }
}