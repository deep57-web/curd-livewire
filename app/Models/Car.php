<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    // Allow mass assignment on the following fields
    protected $fillable = [
        'car_name',
        'brand',
        'capacity',
        'fuel_type',
    ];
}


