<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'type', 'capacity', 'currentlocation','status'];
    public function delivery()
    {
        return $this->hasOne(Delivery::class);
    }
}
