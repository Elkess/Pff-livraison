<?php

namespace App\Http\Controllers;

use App\Models\useeer;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function Useer (Request $request){
        useeer::create($request->all());
        return route('Home');
    }
}
