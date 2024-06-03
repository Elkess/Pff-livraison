<?php

namespace App\Http\Controllers\Payments;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Payment;
use App\Models\Delivery;
use Illuminate\Http\Request;
use Carbon\Carbon;
use PhpParser\Node\Stmt\TryCatch;

class PaymentController extends Controller
{
    public function index()
    {
        $payments = Payment::all();
        return view('admin.payments', compact('payments'));
    }   
    
    public function create(Request $request, $orderId)
    {
        // Retrieve the order details based on the request
        $order = Order::findOrFail($orderId);

        // Generate a random total amount (for demonstration purposes)
        $totalAmount = rand(50, 500); // Generate a random amount between 50 and 500

        // Pass the total amount to the payment form view
        return view('payment.card', compact('totalAmount', 'order'));
    }

    public function processPayment(Request $request)
    {
        // Retrieve the order details
        $order = Order::findOrFail($request->order_id);

        // Validate payment data
        // $request->validate([
        //     'amount' => 'required|numeric|min:0',
        //     'card_number' => 'required|numeric',
        //     'expiry_date' => 'required|date_format:m/y',
        //     'cvv' => 'required|numeric|min:3',
        // ]);

        $userId = $order->client_id;
        // dd($order);
        

        
            // Create payment record
        Payment::create([
            'PaymentDate' => Carbon::now(),
            'amount' => $request->amount,
            'expiry_date' => $request->expiry_date,
            'cvv' => $request->cvv,
            'status' => 'Authorized',
            'client_id' => $userId,
            'card_number' => $request->card_number,
        ]);
        

        

        // Update order status to "Paid"
        $order->status="Paid";
        $order->save();

        // Create delivery record
        Delivery::create([
            'pickuplocation' => $order->pickUpLocation,
            'pickuptime' => $order->pickUpTime,
            'dropofflocation' => $order->dropOffLocation,
            'dropofftime' => $order->dropOffTime,
            'status' => 'Ready',
            'client_id' => $userId,
            'driver_id' => null, // Placeholder value, should be dynamic
            'vehicle_id' => null, // Placeholder value, should be dynamic
        ]);

        // Redirect with success message
        return redirect()->route('client.index')->with('success', 'Payment processed successfully!');
    }
}