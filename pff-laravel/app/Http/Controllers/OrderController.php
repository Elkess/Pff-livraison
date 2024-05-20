<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function ShowOrders(){
        
        $orders=Order::all();
        return view('client.show',['orders'=>$orders]);
    }
    public function showForm()
    {
        return view('client.order');
    }

    public function placeOrder(Request $request)
{
    // Validate the incoming request data
    $request->validate([
        'pickup_location' => 'required|string',
        'pickup_time' => 'required|date',
        'dropoff_location' => 'required|string',
        'dropoff_time' => 'required|date',
    ]);

    // Create a new order
    $order = new Order();
    $order->pickup_location = $request->pickup_location;
    $order->pickup_time = $request->pickup_time;
    $order->dropoff_location = $request->dropoff_location;
    $order->dropoff_time = $request->dropoff_time;
    // Assuming the authenticated user is the client
    $order->client_id = auth()->id();
    $order->save();

    // Generate a random total amount (for demonstration purposes)
    $totalAmount = rand(50, 500); // Generate a random amount between 50 and 500

    // Get the client ID
    $clientId = auth()->id();

    // Redirect the client to the payment form with the order ID, total amount, and client ID
    return view('payment.card', compact('totalAmount', 'order', 'clientId'));
}

    
}