<?php

namespace App\Http\Controllers;

use App\Driver;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class DriverController extends Controller
{

    public function show()
    {
        $drivers = Driver::all();

        return view();
    }
}
