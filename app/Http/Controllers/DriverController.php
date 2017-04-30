<?php

namespace App\Http\Controllers;
use App\User;
use Request as Req;
use Illuminate\Http\Request;
use App\Driver;

class DriverController extends Controller
{

    public function __construct() {
        $this->middleware('role:admin');
    }

    public function show()
    {
        $drivers = Driver::all();

        return view();
    }

    public function create() {
        return view('form-driver');
    }

    public function store(Request $request) {

        $this->validate($request, [
            'forename' => 'required',
            'surname' => 'required',
            'phone' => 'required|digits:9',
            'commencement' => 'required|date',
            'name' => 'required|string|max:255',
            'password' => 'required|string|min:6|confirmed',
            'email' => 'required|string|email|max:255|unique:users'
        ]);

        $input = Req::all();
        $input['password'] = bcrypt($input['password']);
        Driver::create($input);
        User::create($input);
        return redirect('admin/addDriver');
    }
}
