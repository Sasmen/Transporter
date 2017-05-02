<?php

namespace App\Http\Controllers;
use App\Order;
use Request as Req;
use Illuminate\Http\Request;
use App\Driver;

use Log;

class OrderController extends Controller
{

    public function __construct() {
        $this->middleware('role:admin');
    }

    public function show()
    {
        $order = Order::all();
        return view();
    }

    public function create() {
        error_log('create');

        $drivers = Driver::pluck('surname', 'id');
        return view('form-order', ['drivers' => $drivers]);
    }

    public function store(Request $request) {
        error_log('store1');

        $this->validate($request, [
            'name' => 'required',
            'price' => 'required',
            'date_start' => 'required|date',
            'driver_id' => 'required'
        ]);

        error_log('store2');

        $input = Req::all();
        Order::create($input);
        \Session::flash('flash_message', 'Dodano zlecenie ;)');
        return redirect('admin/addOrder');
    }
}