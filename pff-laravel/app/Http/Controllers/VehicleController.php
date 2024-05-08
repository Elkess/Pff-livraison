<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function index(){
        $driver = auth()->user();
        $vehicles = Vehicle::all();
        return view('vehicle.index',compact('driver','vehicles'));
    }
    public function reportVehicle($id){
        
        return ;
    }
}
