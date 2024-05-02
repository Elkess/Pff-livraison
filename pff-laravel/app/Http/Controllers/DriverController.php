<?php

namespace App\Http\Controllers;

use App\Models\Delivery;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function index()
    {
        return view('driver.index');
    }
    public function deliveries()
    {
        $Deliveries = Delivery::all();
        return view('driver.mydeliveries', compact('Deliveries'));
    }
    public function deliveryList()
    {
        $Deliveries = Delivery::all();
        return view('driver.deliverylist', compact('Deliveries'));
    }
    public function acceptDelivery($id)
    {
        $delivery = Delivery::find($id);
        $delivery->update(['driver_id' => auth()->user()->user_id, 'status' => 'in_transit']);
        return redirect(route('driver.deliveries'));
    }
    public function cancelDelivery($id)
    {
        $delivery = Delivery::find($id);
        $delivery->update(['driver_id' => 100]);
        return redirect(route('driver.deliveries'));
    }
    public function confirmDelivery($id)
    {
        $delivery = Delivery::find($id);
        $delivery->update(['status' => 'confirmed']);
        return redirect(route('driver.deliveries'));
    }
}
