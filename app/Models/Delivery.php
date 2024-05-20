<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'driver_id',
        'vehicle_id',
        'pickuplocation',
        'pickuptime',
        'dropofflocation',
        'dropofftime',
        'status'
    ];
    protected $primaryKey ='delivery_id';

    public function driver()
    {
        return $this->belongsTo(User::class, 'driver_id');
    }

    public function client()
    {
        return $this->belongsTo(User::class, 'client_id');
    }
}
