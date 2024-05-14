<?php

namespace App\Http\Controllers;

use App\Models\Delivery;
use App\Models\Report;
use App\Models\Vehicle;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function deliveries()
    {
        $driver = auth()->user();
        $Deliveries = Delivery::where('driver_id', $driver->user_id)->where('status', '<>', 'Delivered')->get();
        $Delivered = Delivery::where('driver_id', $driver->user_id)->where('status', 'Delivered')->get();
        return view('driver.mydeliveries', compact('Deliveries', 'Delivered'));
    }
        public function deliveryList()
    {
        $driver = auth()->user();
        $vehicles = Vehicle::where('driver_id', $driver->user_id)->get();
        $deliveries = Delivery::paginate(20);
        return view('driver.deliverylist', compact('deliveries', 'vehicles'));
    }
    public function vehicles()
    {
        $driver = auth()->user();
        $vehicles = Vehicle::where('driver_id', $driver->user_id)->get();
        return view('driver.vehicles', compact('driver', 'vehicles'));
    }

    public function acceptDelivery(Request $request, $id)
    {
        $delivery = Delivery::find($id);
        $Used_vehicule = Vehicle::where('vehicle_id', $request->vehicle);
        $Used_vehicule->update([
            'status' => 'in Transit'
        ]);
        $delivery->update([
            'vehicle_id' => $request->vehicle,
            'driver_id' => auth()->user()->user_id,
            'status' => 'in_transit'
        ]);
        return redirect(route('driver.deliveries'));
    }
    public function cancelDelivery(Request $request, $id)
    {
        $delivery = Delivery::find($id);
        $Used_vehicule = Vehicle::where('vehicle_id', $delivery->vehicle_id);
        if ($delivery->pickuptime == null) {
            $Used_vehicule->update(['status' => 'Available']);
            $delivery->update([
                'driver_id' => 1,
                'vehicule_id' => null,
                'status' => 'Ready'
            ]);
        } else {
            $request->validate([
                'newpickup' => 'required'
            ]);
            $delivery->update([
                'driver_id' => 1,
                'pickuplocation' => $request->newpickup,
                'status' => 'Ready'
            ]);
            $Used_vehicule->update(['status' => 'Available']);
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
            $v = Vehicle::where('vehicle_id', $delivery->vehicle_id)->get()[0];
            $v->update([
                'status' => 'Available'
            ]);
            return redirect(route('driver.deliveries'));
        }
    }
    public function reports()
    {
        return view('driver.reports', ['reports' =>  Report::where('vehicle_id', auth()->user()->user_id)->get()
        ]);
    }
    public function reportVehicle(Request $request)
    {
        $validated = $request->validate([
            'description' => 'required',
            'subject' => 'required',
            'location' => 'required',
        ]);

        if ($validated) {
            Report::create($request->all());
            $delivery =Delivery::where('vehicle_id',$request->vehicle_id);
            dd($delivery);
            $vehicle = Vehicle::where('vehicle_id', $request->vehicle_id)->get()[0];
            $vehicle->update([
                'status' => 'Reported'
            ]);
            return redirect(route('driver.vehicles'));
        } else {
            return redirect(route('driver.vehicles'))->withErrors('err', 'Fill All the Fields');
        }
    }
}
