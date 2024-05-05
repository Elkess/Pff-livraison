<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Delivery;
use Illuminate\Http\Request;

class DeliveryController extends Controller
{
    public function index()
    {
        $deliveries = Delivery::all();
        return view('admin.deliveries.index', compact('deliveries'));
    }

    public function create()
    {
        return view('admin.deliveries.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'pickUpLocation' => 'required|string',
            'pickUpTime' => 'required|date',
            'dropOffLocation' => 'required|string',
            'dropOffTime' => 'required|date',
            'status' => 'required|in:Pending,In Transit,Delivered,Out for Delivery,Attempted Delivery,Returned to Sender,Delayed,On Hold,Failed,Canceled',
            'client_id' => 'nullable|exists:users,id',
            'driver_id' => 'nullable|exists:users,id',
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

    return view('admin.deliveries.edit', compact('delivery', 'clients', 'drivers'));
}

    public function update(Request $request, Delivery $delivery)
    {
        $request->validate([
            'pickUpLocation' => 'required|string',
            'pickUpTime' => 'required|date',
            'dropOffLocation' => 'required|string',
            'dropOffTime' => 'required|date',
            'status' => 'required|in:Pending,In Transit,Delivered,Out for Delivery,Attempted Delivery,Returned to Sender,Delayed,On Hold,Failed,Canceled',
            'client_id' => 'nullable|exists:users,id',
            'driver_id' => 'nullable|exists:users,id',
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