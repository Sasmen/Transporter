<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    protected $fillable = [
        'name',
        'surname',
        'phone',
        'commencement'
    ];

    public function order() {
        return $this->hasMany('App\Order');
    }
}
