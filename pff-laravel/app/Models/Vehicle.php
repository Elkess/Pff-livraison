<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
=======
use SebastianBergmann\CodeCoverage\Driver\Driver;
>>>>>>> origin/elkess

class Vehicle extends Model
{
    use HasFactory;
<<<<<<< HEAD
    protected $fillable = ['name', 'type', 'capacity', 'currentlocation','status'];
    protected $primaryKey ='vehicle_id';
    public function driver()
    {
        return $this->hasOne(User::class,'user_id');
    }
    public function report(){
        
        return $this->hasOne(Report::class,'report_id');
    }
}
=======
    protected $primaryKey = 'vehicle_id';

    protected $fillable = [
        'type',
        'capacity',
        'status',
        'currentLocation',
        'driver_id',
    ];

    public function Driver(){
        return $this->belongsTo(User::class);
    }
}
>>>>>>> origin/elkess
