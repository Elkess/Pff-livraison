<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'amount',
        'card_number',
        'expiry_date',
        'cvv',
        'PaymentDate',
        'client_id',
    ];
}