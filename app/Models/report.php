<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;
    protected $fillable = ['location','description','report_status','subject','delivery_id','vehicle_id'];
    protected $primaryKey= 'report_id';
    
}
