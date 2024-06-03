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
    



    public function index(){
        
        $orders=Order::orderBy('id', 'asc')->paginate(10);
        return view('client.orders.index',['orders'=>$orders]);
    }
    public function create()
    {
        return view('client.orders.create');
    }

    protected function generateUniqueOrderNumber()
{
    // Generate a unique ID with a prefix and a random number
    $uniqueNumber = uniqid('order_', true) . '_' . rand(10, 99);
    
    // Ensure the order number is unique in the database
    while (Order::where('order_number', $uniqueNumber)->exists()) {
        $uniqueNumber = uniqid('order_', true) . '_' . rand(10, 99);
    }
    
    return $uniqueNumber;
}
    public function store(Request $request)
{
    // Validate the incoming request data
    $request->validate([
        'pickUpLocation' => 'required|string',
        'pickUpTime' => 'required|date',
        'dropOffLocation' => 'required|string',
        'dropOffTime' => 'required|date',
    ]);

    // Create a new order
    $order = new Order();
    $order->order_number = $this->generateUniqueOrderNumber();
    $order->pickUpLocation = $request->pickUpLocation;
    $order->pickUpTime = $request->pickUpTime;
    $order->dropOffLocation = $request->dropOffLocation;
    $order->dropOffTime = $request->dropOffTime;
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
public function show(Order $order)
    {
        return view('client.orders.show', compact('order'));
    }

    public function edit(Order $order)
    {
        return view('client.orders.edit', compact('order'));
    }
    
    public function update(Request $request, Order $order)
    {
        $request->validate([
            'pickUpLocation' => 'required|string',
        'pickUpTime' => 'required|date',
        'dropOffLocation' => 'required|string',
        'dropOffTime' => 'required|date',
        ]);

        $order->fill($request->post())->save();
        return redirect()->route('client.orders.index')->with('success', 'Order Has Been updated successfully');
    }

    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('client.orders.index')->with('success', 'Order has been deleted successfully');
    }
}