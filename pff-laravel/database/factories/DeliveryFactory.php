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
            'pickuptime' => $this->faker->dateTime(),
            'dropofflocation' => $this->faker->address(),
            'dropofftime' => $this->faker->dateTime(),
            'status' => $this->faker->randomElement(['Ready','Delivered', 'in_transit', 'Canceled', 'Other']),
            'client_id' => User::factory(),
            'driver_id' => 100,
        ];
    }
}
