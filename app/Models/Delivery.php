<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    use HasFactory;
    protected $fillable = [
        'deliveryable_id',
        'deliveryable_type',
        'consignee',
        'delivery_date',
        'instructions'
    ];

    public function deliveryable()
    {
        return $this->morphTo();
        // return $this->hasMany('App\Models\DesaDispatch',);
    }
}


