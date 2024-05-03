<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function index(){
        $driver = auth()->user();
        return view('vehicle.index',compact('driver'));
    }
}
