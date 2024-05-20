<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Srmklive\PayPal\Services\PayPal as PayPalClient;

class PaypalController extends Controller
{
    public function payment(Request $request){
        // dd($request->price);
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken=$provider->getAccessToken();

// Http::withOptions(['verify' => false])->withHeaders(['curl' => ['-k']])->get('https://api-m.sandbox.paypal.com');
    Http::withOptions([
    'verify' => 'C:\\Users\\user\\Desktop\\serl\\Pff-livraison\\serl\\ca\\cacert.pem'
    ]);


        $response=$provider->createOrder([
            "intent"=>"CAPTURE",
            "application_context"=>[
                "return_url"=>route('payment.paypal.success'),
                "cancel_url"=>route('payment.paypal.cancel')
            ],
            "purchase_units"=>[
                [
                    "amount"=>[
                        "currency_code"=>"USD",
                        "value"=>$request->price
                    ]
                ]
            ]
        ]);
        dd($response);
    }
}