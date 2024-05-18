<?php
namespace Database\Seeders;

use App\Models\Delivery;
use App\Models\Order;
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
        // Create 5 users
        User::factory(5)->create();

        // Create clients
        $clients = User::factory()->count(5)->create(['role' => 'client']);

        // Create orders for each client
        foreach ($clients as $client) {
            Order::factory()->create([
                'order_number' => uniqid(),
                'pickUpLocation' => 'Pickup Address',
                'pickUpTime' => now()->addDay(),
                'dropOffLocation' => 'Dropoff Address',
                'dropOffTime' => now()->addDays(2),
                'client_id' => $client->id,
            ]);
        }

        // Create payments
        foreach ($clients as $client) {
            Payment::factory()->create([
                'PaymentDate' => now(),
                'amount' => 874.11,
                'status' => 'Pending',
                'client_id' => $client->id,
            ]);
        }

        // Create 4 vehicles
        $vehicles = Vehicle::factory(4)->create();

        // Assuming you have drivers already created
        $drivers = User::where('role', 'Driver')->take(4)->get();

        foreach ($vehicles as $key => $vehicle) {
            $vehicle->update(['driver_id' => $drivers[$key]->id]);
        }

        // Create deliveries
        Delivery::factory(5)->create();
    }
}