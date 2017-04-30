<?php

namespace App\Http\Controllers;
use App\Vehicle;
use Request as Req;
use Illuminate\Http\Request;

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

    public function store(Request $request) {

        $this->validate($request, [
            'name' => 'required',
            'capacity' => 'required|integer|between:10,1000',
            'payload' => 'required|numeric|between:500,100000',
            'registration' => 'required|between:7,8',
            'combustion' => 'required|numeric|between:5,30'
        ]);

        $input = Req::all();
        Vehicle::create($input);
        //User::create($input);
        return redirect('admin/addVehicle');
    }
}