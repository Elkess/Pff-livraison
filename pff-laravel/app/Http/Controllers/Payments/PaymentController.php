<?php

namespace App\Http\Controllers\Payments;

use App\Http\Controllers\ClientController;
use App\Models\Order;
use App\Models\Payment;
use App\Models\Delivery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class PaymentController extends Controller
{
    public function index(){
        $payments = Payment::all();
        return view('admin.payments', compact('payments'));
    }
    
    public function create(Request $request)
    {
        // Retrieve the order details based on the request
        $order = Order::find(1
            // $request->order_id
        );

        // Generate a random total amount (for demonstration purposes)
        $totalAmount = rand(50, 500); // Generate a random amount between 50 and 500

        // Pass the total amount to the payment form view
        return view('payment.card', compact('totalAmount', 'order'));
    }

    public function processPayment(Request $request
    , Order $order
    )
    {
        // Validate payment data
        $request->validate([
            'amount' => 'required|numeric|min:0',
        ]);

        $userId = $order->client_id;
        
        // Create payment record
        Payment::create([
            'PaymentDate' => Carbon::now(),
            'amount' => $request->amount,
            'expiry_date' => $request->expiry_date,
            'cvv' => $request->cvv,
            'status' => 'Pending',
            'client_id' => $userId,
            'card_number' => $request->card_number,
        ]);

        

        // Update order status to "Pending"
        $order->update(['status' => 'Pending']);

        // Create delivery record
        Delivery::create([
            'pickUpLocation' => $order->pickUpLocation,
            'pickUpTime' => $order->pickUpTime,
            'dropOffLocation' => $order->dropOffLocation,
            'dropOffTime' => $order->dropOffTime,
            'status' => 'Pending',
            'client_id' => $userId,
        ]);

        // Redirect with success message
        // return ClientController::index($order);
        
        return to_route('client.index',$order)->with('success', 'Payment processed successfully!');
    }
}