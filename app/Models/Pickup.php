<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pickup extends Model
{
    use HasFactory;

    protected $fillable = [
        'pickable_id',
        'pickable_type',
        'shipper',
        'pickup_date',
        'bol',
        'instructions',
        'customer_required_info',
        'weight',
        'quantity',
        'type',
        'notes'
    ];
}
