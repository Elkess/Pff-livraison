<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function index(){
        $driver = auth()->user();
        $vehicles = Vehicle::where('driver_id',$driver->user_id)->get();
        return view('driver.vehicles',compact('driver','vehicles'));
    }
    public function reportVehicle(Request $request,$id){
        $vehicle = Vehicle::find($id);
        $validated = $request->validate([
            'description'=>'required',
            'location'=>'required',
        ]);
        if ($validated) {   
            Report::create($request->all());
            return redirect(route('driver.vehicles'));
        }
        else{
            return redirect(route('driver.vehicles'))->withErrors('err','Validation error');
        }
    }
}
