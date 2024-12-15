<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kurir extends Model
{
    protected $fillable = [
        'name',
        'contact',
        'vehicle_type',
        'status',
    ];
}
