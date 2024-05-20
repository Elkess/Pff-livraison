<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_number',
        'pickUpLocation',
        'pickUpTime',
        'dropOffLocation',
        'dropOffTime',
        'status',
        'client_id',
    ];

    public function client()
    {
        return $this->belongsTo(User::class, 'client_id');
    }
}