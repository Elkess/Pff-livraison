<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        return $this->hasOne(User::class,'driver_id','id');
    }

    public function Client (){
        return $this->hasOne('delivery','client_id','id');
    }
}