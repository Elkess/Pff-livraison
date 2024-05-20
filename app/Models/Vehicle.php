<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;
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
