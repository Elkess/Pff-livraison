<?php

namespace App\Http\Controllers\client;

use App\Models\useeer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function Useer (Request $request){
        useeer::create($request->all());
        return route('Home');
    }
}