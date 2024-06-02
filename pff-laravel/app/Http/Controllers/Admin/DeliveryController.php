<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Delivery;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DeliveryController extends Controller
{
    public function index()
    {
        $deliveries = Delivery::with(['Client','Driver'])->get();
        return view('admin.deliveries.index', compact('deliveries'));
    }

    public function create()
    {    
    // Retrieve clients
    $clients = User::where('role', 'Client')->get();

    // Retrieve drivers
    $drivers = User::where('role', 'Driver')->get();
        return view('admin.deliveries.create',compact('clients','drivers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'pickuplocation' => 'required|string',
            'pickuptime' => 'required|date',
            'dropofflocation' => 'required|string',
            'dropofftime' => 'required|date',
            'status' => 'required|in:Pending,In Transit,Delivered,Out for Delivery,Attempted Delivery,Returned to Sender,Delayed,On Hold,Failed,Canceled',
            'client_id' => 'nullable|exists:users,user_id',
            'driver_id' => 'nullable|exists:users,user_id',
            'vehicle_id' => 'nullable',
        ]);

        Delivery::create($request->all());

        return redirect()->route('admin.deliveries.index')->with('success', 'Delivery created successfully.');
    }

    public function show(Delivery $delivery)
    {
        return view('admin.deliveries.show',['delivery'=>$delivery]);
    }

    public function edit($id)
{
    $delivery = Delivery::findOrFail($id);
    
    // Retrieve clients
    $clients = User::where('role', 'Client')->get();

    // Retrieve drivers
    $drivers = User::where('role', 'Driver')->get();
    $vehicles = Vehicle::get();

    return view('admin.deliveries.edit', compact('delivery', 'clients', 'drivers','vehicles'));
}

    public function update(Request $request, Delivery $delivery)
    {
        $request->validate([
            'pickuplocation' => 'required|string',
            'pickuptime' => 'required|date',
            'dropofflocation' => 'required|string',
            'dropofftime' => 'required|date',
            'status' => 'required|in:Ready,in_transit,Other',
            'client_id' => 'nullable|exists:users,user_id',
            'driver_id' => 'nullable|exists:users,user_id',
            'vehicle_id' => 'nullable',
        ]);

        $delivery->update($request->all());

        return redirect()->route('admin.deliveries.index')->with('success', 'Delivery updated successfully.');
    }

    public function destroy(Delivery $delivery)
    {
        $delivery->delete();

        return redirect()->route('admin.deliveries.index')->with('success', 'Delivery deleted successfully.');
    }
}