<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Order;
use App\Models\User;

class OrderFactory extends Factory
{
    protected $model = Order::class;

    public function definition()
    {
        return [
            'order_number' => $this->faker->unique()->randomNumber(),
            'pickUpLocation' => $this->faker->address,
            'pickUpTime' => $this->faker->dateTimeBetween('+1 day', '+1 week'),
            'dropOffLocation' => $this->faker->address,
            'dropOffTime' => $this->faker->dateTimeBetween('+1 week', '+2 weeks'),
            'status' => $this->faker->randomElement(['Pending', 'Paid', 'Canceled']),
            'client_id' => function () {
                // Get a random user with the role 'client'
                $client = User::whereHas('roles', function ($query) {
                    $query->where('role', 'client');
                })->inRandomOrder()->first();
                return $client->id ?? User::factory()->create(['role' => 'client'])->id;
            },
        ];
    }
}