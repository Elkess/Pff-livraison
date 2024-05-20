<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Checkout\Session;
use Stripe\Stripe;

class StripeController extends Controller
{
    public function index()
    {
        return view('payment.stripe');
    }
    
    public function checkout()
{
    \Stripe\Stripe::setApiKey(config('app.STRIPE_SK'));
    
    $session = \Stripe\Checkout\Session::create([
    'payment_method_types' => ['card'],
    'line_items' => [
        [
            'price_data' => [
                'currency' => 'gbp',
                'product_data' => [
                    'name' => 'Send me money!!!',
                ],
                'unit_amount' => 500,
            ],
            'quantity' => 1,
        ],
    ],
    'mode' => 'payment',
    'success_url' => route('payment.stripe.success'),
    'cancel_url' => route('payment.stripe')
]);

}


    public function success()
    {
        return view('payment.stripe');
        
    }
}