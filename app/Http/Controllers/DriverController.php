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
        $Deliveries = Delivery::where('driver_id', $driver->user_id)->where('status', '<>', 'Delivered')->where('status', '<>', 'Pending')->get();
        $Pendings = Delivery::where('driver_id', $driver->user_id)->where('status', 'Pending')->get();

        $Delivered = Delivery::where('driver_id', $driver->user_id)->where('status', 'Delivered')->get();
        // dd($Pendings);
        return view('driver.deliveries', compact('Deliveries', 'Delivered', 'Pendings'));
    }
    public function orders()
    {
        $driver = auth()->user();
        $vehicles = Vehicle::where('driver_id', $driver->user_id)->get();
        $deliveries = Delivery::paginate(20);
        return view('driver.orders', compact('deliveries', 'vehicles'));
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
                'status' => 'Pending',
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
        return view('driver.reports', [
            'reports' =>  Report::all()
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
            $delivery = Delivery::where('vehicle_id', $request->vehicle_id)->get()->first();

            $vehicle = Vehicle::where('vehicle_id', $request->vehicle_id)->get()->first();
            // dd($request->all());
            if ($delivery!= null) {   
                $delivery->update([
                    'status' => 'Ready',
                    'driver_id' => 1,
                    'pickuplocation' => $request->location,
                    'pickuptime' => null
                ]);
            }
            $vehicle->update([
                'status' => 'Reported'
            ]);
            Report::create([...$request->all(), 'status' => 'Report Sent To Admin']);
            return redirect(route('driver.vehicles'));
        } else {
            return redirect(route('driver.vehicles'))->withErrors('err', 'Fill All the Fields');
        }
    }
}
