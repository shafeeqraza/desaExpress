<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DesaDispatch extends Model
{
    use HasFactory;

    protected $fillable = [
        'custom_trip_number',
        'driver_id',
        'driver_name',
        "dispatcher_id",
        'truck_number',
        'trailer',
        'odometer',
        'customer_name',
        'primary_fee',
        'primary_fee_type',
        'fuel_expense_type',
        'additional',
        'detention',
        'lumper',
        'stop_off',
        'tarp_fee',
        'fsc_amount',
        'fsc_amount_type',
        'invoice_advance',
        'truck_expense',
        'fuel_expense',
        'refer_fuel_expense',
        "booked",
        "status"
    ];

    public function deliveries(){
        return $this->morphMany(Delivery::class, 'deliveryable');
    }

    public function routes(){
        return $this->morphMany(Route::class, 'routeable');
    }
    public function pickups(){
        return $this->morphMany(Pickup::class, 'pickupable');
    }

    public function progressDispatch()
    {
        return $this->whereIn('status', [
            "in progress",
            "In Progress",
            "progress",
            "Progress"
        ])->get();
    }

    public function completedDispatch()
    {
        return $this->whereIn('status', ["completed", "Completed"])->get();
    }

    public function pendingDispatch()
    {
        return $this->whereIn('status', ['pending', '0', 'Pending'])->get();
    }
}
