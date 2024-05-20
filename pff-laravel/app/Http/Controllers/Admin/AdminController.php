<?php

namespace App\Http\Controllers\Admin;
use App\Models\Payment;
use App\Models\Delivery;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function Reporting(){
    // Calculate the total amount for each month
    $monthlyAmounts = Payment::select(DB::raw('SUM(amount) as total_amount'), DB::raw("DATE_FORMAT(created_at, '%Y-%m') as month"))
                            ->groupBy('month')
                            ->get();
    
    // Get the deliveries that have been delivered
    $deliveredDeliveries = Delivery::with('driver', 'client') // Load driver and client relationships
                                    ->orderBy('created_at', 'desc')
                                    ->limit(6)
                                    ->get();

    return view('admin.admin', [
        'deliveredDeliveries' => $deliveredDeliveries,
        'monthlyAmounts' => $monthlyAmounts
    ]);
}
    
}