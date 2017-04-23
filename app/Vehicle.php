<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable = [
        'name',
        'capacity',
        'payload',
        'registration',
        'combustion'
    ];

    public function order() {
        return $this->hasMany('App\Order');
    }
}
