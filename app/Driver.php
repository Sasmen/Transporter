<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class Driver extends Model
{
    protected $fillable = [
        'forename',
        'surname',
        'phone',
        'commencement',
        'user_id'
    ];


    public function order() {
        return $this->hasMany('App\Order');
    }
}
