<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Delivery>
 */
class DeliveryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'pickuplocation' => $this->faker->address(),
            'pickuptime' => fake()->dateTime(),
            'dropofflocation' => $this->faker->address(),
            'dropofftime' => fake()->dateTime(),
            'weight' => $this->faker->numberBetween(10, 120),
            'status' => $this->faker->randomElement(['Ready', 'in_transit', 'Other']),
            'client_id' => $this->faker->randomElement(User::all()),
            'vehicle_id' => null,
            'driver_id' => 1,
        ];
    }
}