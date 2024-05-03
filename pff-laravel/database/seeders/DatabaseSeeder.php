<?php

namespace Database\Seeders;

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
        \App\Models\User::create(['Firstname' => 'kess',
            'Lastname' => 'amine ',
            'role' => 'admin',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'address' => 'Deroua Settat',
            'phonenumber' => '+212522009988',
            'email' => 'kess@gmail.com'
        ]);
        \App\Models\User::create(['Firstname' => 'Youssef',
            'Lastname' => 'rhandoumi',
            'role' => 'driver',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'address' => 'Casa Settat',
            'phonenumber' => '+212522009988',
            'email' => 'ghandoumi01@gmail.com'
        ]);
        \App\Models\Vehicle::factory(10)->create();
        \App\Models\User::factory(30)->create();
        \App\Models\Delivery::factory(100)->create();

    }
}