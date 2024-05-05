<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Delivery;
use App\Models\Payment;
use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
public function run()
{
    User::factory(5)->create();

    $client = User::find(1); // Assuming you have a client with ID 1
    $paymentData = [
        'PaymentDate' => now(),
        'amount' => 874.11,
        'status' => 'Refunded',
        'client_id' => $client->id, // Set the client_id
    ];

    Payment::factory(5)->create($paymentData);

    $vehicles = Vehicle::factory(4)->create();

    // Assuming you have drivers already created
    $drivers = User::where('role', 'Driver')->take(4)->get();

    foreach ($vehicles as $key => $vehicle) {
        $vehicle->update(['driver_id' => $drivers[$key]->id]);
    }



    
    Delivery::factory(5)->create();
}

}