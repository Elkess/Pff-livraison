<?php

namespace App\Http\Controllers;

use App\Models\Delivery;
use Carbon\Carbon;
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
        $delivery->update([
            'driver_id' => auth()->user()->user_id,
            'status' => 'in_transit'
        ]);
        return redirect(route('driver.deliveries'));
    }
    public function cancelDelivery(Request $request, $id)
    {
        $delivery = Delivery::find($id);

        if ($delivery->pickuptime === null) {
            $delivery->update(['driver_id' => 1, 'status' => 'Ready']);
        } else {
            $request->validate([
                'newpickup' => 'required'
            ]);
            $delivery->update([
                'driver_id' => 1,
                'pickuplocation' => $request->newpickup,
                'status' => 'Ready'
            ]);
        }

        return redirect(route('driver.deliveries'));
    }

    public function pickupDelivery($id)
    {
        $delivery = Delivery::find($id);
        $delivery->update([
            'status' => 'Picked Up',
            'pickuptime' => Carbon::now()
        ]);
        return redirect(route('driver.deliveries'));
    }
    public function dropoffDelivery($id)
    {
        $delivery = Delivery::find($id);
        if ($delivery->pickuptime == null) {
            return redirect(route('driver.deliveries'))->with('Error', 'PICK UP DELIVERY FIRST');
        } else {
            $delivery->update([
                'status' => 'Delivered',
                'dropofftime' => Carbon::now()
            ]);
            return redirect(route('driver.deliveries'));
        }
    }
}
