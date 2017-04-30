<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\DB;
use Request as Req;
use Illuminate\Http\Request;
use App\Driver;

class OrderController extends Controller
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

        $drivers = Driver::pluck('surname', 'id');
        return view('form-order', ['drivers' => $drivers]);
    }

    public function store(Request $request) {

        $this->validate($request, [
            'name' => 'required',
            'price' => 'required',
            'date_start' => 'required|date',
            'date_end' => 'required|date',
        ]);

        $input = Req::all();
        Driver::create($input);
        User::create($input);
        return redirect('admin/addOrder');
    }
}