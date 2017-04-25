<?php

namespace App\Http\Controllers;
use App\User;
use Request;
use App\Driver;

class DriverController extends Controller
{

    public function show()
    {
        $drivers = Driver::all();

        return view();
    }

    public function create() {
        return view('form-driver');
    }

    public function store() {
        $input = Request::all();
        Driver::create($input);
        User::create($input);
        return redirect('home');
    }
}
