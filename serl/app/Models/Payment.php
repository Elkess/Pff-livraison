<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'PaymentDate',
        'amount',
        'status',
        'client_id',
    ];

    public function Client (){
        return $this->hasMany(User::class,'client_id','id');
    }
}