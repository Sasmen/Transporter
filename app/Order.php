<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'name',
        'price',
        'date_start',
        'date_end',
        'driver_id',
        'vehicle_id',
        'capacity',
        'payload',
        'combustion'
    ];

    public function driver() {
        return $this->belongsTo('App\Driver');
    }

    public function vehicle() {
        return $this->belongsTo('App\Vehicle');
    }
}
