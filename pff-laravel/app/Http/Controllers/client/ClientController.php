<?php

namespace App\Http\Controllers\client;

use App\Models\Order;
use App\Models\Delivery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClientController extends Controller
{
    public function index()
    {
        $clientId = auth()->id();
        $orders = Order::where('client_id', $clientId)->get();
        $deliveries = Delivery::where('client_id', $clientId)->get();
        return view('Components.ClientHasAuthPanel', compact('orders', 'deliveries'));
    }

    public function markAsDelivered($deliveryId)
    {
        $delivery = Delivery::findOrFail($deliveryId);
        $delivery->status = 'Delivered';
        $delivery->save();

        return redirect()->back()->with('status', 'Delivery marked as delivered.');
    }
}