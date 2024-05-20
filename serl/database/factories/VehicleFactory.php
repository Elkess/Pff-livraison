<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vehicle>
 */
class VehicleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'type' => $this->faker->randomElement(['Sedan', 'SUV', 'Truck']), // Example types
            'capacity' => $this->faker->numberBetween(1, 10), // Example capacity range
            'status' => $this->faker->randomElement(['Available', 'Not Working', 'In Maintenance']), // Example statuses
            'currentLocation' => $this->faker->address,
            'driver_id' => User::factory()->driver()->create()->id, // Assign a driver
        ];
    }
}