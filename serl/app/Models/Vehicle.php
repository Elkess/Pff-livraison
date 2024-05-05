<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use SebastianBergmann\CodeCoverage\Driver\Driver;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'capacity',
        'status',
        'currentLocation',
        'driver_id',
    ];

    public function Driver(){
        return $this->belongsTo(User::class,'driver_id','id');
    }
}