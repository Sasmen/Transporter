<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'name',
        'price',
        'date_end'
    ];

    public function driver() {
        return $this->belongsTo('App\Driver');
    }

    public function vehicle() {
        return $this->belongsTo('App\Vehicle');
    }
}
