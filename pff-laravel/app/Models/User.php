<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = ['Firstname', 'Lastname', 'role', 'password', 'phonenumber', 'email'];
    protected $primaryKey = 'user_id';
    protected $hidden = [
        'password',
        'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
        // 'password' => 'hashed',
    ];

    // Define inverse relationships for deliveries
    public function driver()
    {
        return $this->hasMany(Delivery::class, 'driver_id');
    }

    public function client()
    {
        return $this->hasMany(Delivery::class, 'client_id');
    }
    public function vehicle(){
        return $this->hasMany(Vehicle::class,'vehicle_id');
    }
}