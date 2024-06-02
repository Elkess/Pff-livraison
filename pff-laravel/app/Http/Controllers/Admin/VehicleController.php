<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VehicleController extends Controller
{
    /**
     * Display a listing of the vehicles.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $vehicles = Vehicle::all();
        $vehiclesNotInDelivery = Vehicle::whereNotIn('vehicle_id', function($query) {
            $query->select('vehicle_id')
            ->from('deliveries');
        })->get();
        
        return view('admin.vehicles.index', compact('vehicles','vehiclesNotInDelivery'));
    }

    /**
     * Show the form for creating a new vehicle.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.vehicles.create');
    }

    /**
     * Store a newly created vehicle in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'type' => 'required|string',
            'capacity' => 'required|numeric',
            'status' => 'required|in:in transit,available,not working,in maintenance',
            'currentlocation' => 'required|string',
            'driver_id' => 'required|exists:users,user_id,role,driver',
        ]);

        Vehicle::create($validatedData);

        return redirect()->route('admin.vehicles.index')
                        ->with('success','Vehicle created successfully.');
    }

    /**
     * Display the specified vehicle.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function show(Vehicle $vehicle)
    {
        return view('admin.vehicles.show', compact('vehicle'));
    }

    /**
     * Show the form for editing the specified vehicle.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function edit(Vehicle $vehicle)
    {
        
        $drivers = User::where('role', 'Driver')->get();
        return view('admin.vehicles.edit', compact('vehicle', 'drivers'));
    }

    /**
     * Update the specified vehicle in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vehicle $vehicle)
    {
        $validatedData = $request->validate([
            'type' => 'required|string',
            'capacity' => 'required|numeric',
            'status' => 'required|in:in transit,available,not working,in maintenance',
            'currentlocation' => 'required|string',
            'driver_id' => 'required|exists:users,user_id,role,driver',

        ]);

        $vehicle->update($validatedData);

        return redirect()->route('admin.vehicles.index')
                        ->with('success','Vehicle updated successfully.');
    }

    /**
     * Remove the specified vehicle from storage.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vehicle $vehicle)
    {
        $vehicle->delete();

        return redirect()->route('admin.vehicles.index')
                        ->with('success','Vehicle deleted successfully.');
    }
}