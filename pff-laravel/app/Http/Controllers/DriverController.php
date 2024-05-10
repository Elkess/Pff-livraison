<?php

namespace App\Http\Controllers;

use App\Models\Delivery;
use App\Models\Vehicle;
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
        $driver = auth()->user();
        $Deliveries = Delivery::where('driver_id', $driver->user_id)->get();
        return view('driver.mydeliveries', compact('Deliveries'));
    }
    public function deliveryList()
    {
        $driver = auth()->user();
        $vehicles = Vehicle::where('driver_id', $driver->user_id)->get();
        $deliveries = Delivery::paginate(20);
        return view('driver.deliverylist', compact('deliveries', 'vehicles'));
    }
    public function acceptDelivery(Request $request,$id)
    {
        $delivery = Delivery::find($id);
        $Used_vehicule = Vehicle::where('vehicle_id',$request->vehicle) ;
        $Used_vehicule->update([
            'status'=>'in Transit'
        ]);
        $delivery->update([
            'driver_id' => auth()->user()->user_id,
            'status' => 'in_transit'
        ]);
        
        return redirect(route('driver.deliveries'));
    }
    public function cancelDelivery(Request $request, $id)
    {
        $delivery = Delivery::find($id);
        if ($delivery->pickuptime == null) {
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
