<?php

namespace Database\Factories;

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
        $predefinedAddresses = [
            '123 Main St, City, Country',
            '456 Elm St, City, Country',
            '789 Oak St, City, Country',
            // Add more predefined addresses as needed
        ];

        return [
            'pickUpLocation' => $this->faker->randomElement($predefinedAddresses),
            'pickUpTime' => $this->faker->dateTimeBetween('now', '+7 days'),
            'dropOffLocation' => $this->faker->randomElement($predefinedAddresses),
            'dropOffTime' => $this->faker->dateTimeBetween('+7 days', '+14 days'),
            'status' => $this->faker->randomElement(['Pending', 'In Transit', 'Delivered', 'Out for Delivery', 'On Hold', 'Canceled']),
            'client_id' => null, // Assuming the client_id will be populated later
            'driver_id' => null, // Assuming the driver_id will be populated later
        ];
    }
}