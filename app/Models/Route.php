<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    use HasFactory;
    protected $fillable = [
        'routeable_id',
        'routeable_type',
        'route_stop',
        'route_stop_date',
        'instructions',
        'notes',
    ];

    public function routeable()
    {
        return $this->morphTo();
        // return $this->hasMany('App\Models\DesaDispatch',);
    }
}
