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
            'type' => $this->faker->randomElement(['Car', 'MotorCycle', 'Truck', 'Plane']),
            'capacity' => $this->faker->randomElement(['10', '40', '60', '100']),
            'currentlocation' => $this->faker->streetAddress(),
            'status' => $this->faker->randomElement(['Available', 'Damaged', 'in Maintenance', 'in Transit']),
            'user_id' => $this->faker->randomElement(User::all())
        ];
    }
}
