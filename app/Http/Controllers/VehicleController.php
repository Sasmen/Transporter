<?php

namespace App\Http\Controllers;
use App\Vehicle;
use Request;

class VehicleController extends Controller
{

    public function show()
    {
        $vehicle = Vehicle::all();
        return view();
    }

    public function create() {
        return view('form-vehicle');
    }

    public function store() {
        $input = Request::all();
        Vehicle::create($input);
        return redirect('home');
    }
}
