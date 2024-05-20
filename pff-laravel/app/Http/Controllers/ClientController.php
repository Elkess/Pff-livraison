<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public static function index(Order $order){

        return view('client.home',['order'=>$order]);
    }
}