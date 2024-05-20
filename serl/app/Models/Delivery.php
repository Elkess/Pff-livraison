<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use SebastianBergmann\CodeCoverage\Driver\Driver;

class Delivery extends Model
{
    use HasFactory;

    protected $primaryKey = 'delivery_id';
    protected $fillable = [
        'pickUpLocation',
        'pickUpTime',
        'dropOffLocation',
        'dropOffTime',
        'status',
        'client_id',
        'driver_id',
    ];

    public function Driver (){
        return $this->belongsTo(User::class);
    }

    public function Client (){
        return $this->belongsTo(User::class);
    }
}