<?php

namespace App\Http\Controllers;
use App\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Request as Req;
use Illuminate\Http\Request;
use App\Driver;

class OrderDriverController extends Controller
{

    public function __construct()
    {
        $this->middleware('role:driver');
    }

    public function show()
    {
        $driver = DB::table('drivers')->where('user_id', '=', Auth::id())->first();
        $orders = DB::table('orders')->where('driver_id', '=', $driver->id)->paginate(2);
        if (count($orders) === 0 && $orders->currentPage() > 1) {
            $lastPage = $orders->lastPage(); // Get last page with results.
            $url = route('listOrder') . '?page=' . $lastPage; // Manually build URL.
            return redirect($url);
        }

        return view('driver.list-order-driver', ['orders' => $orders]);
    }

    public function create()
    {

        $drivers = Driver::pluck('surname', 'id');
        return view('form-order', ['drivers' => $drivers]);
    }

    public function endOrder($id)
    {
        $order = Order::findOrFail($id);
        $order->update(['date_end' => date('Y-m-d')]);
        \Session::flash('flash_message', 'zakończono zlecenie ;)');
        return back();
    }

    public function edit($id)
    {
        $order = Order::findOrFail($id);
        return view('driver.form-end-order', ['order' => $order]);
    }

    public function update(Request $request) {

        $this->validate($request, [
           'combustion' => 'required|numeric|between:5,30',
            'date_end' => 'required|before:tomorrow'
        ]);

        $input = Req::all();
        DB::table('orders')->where('id', '=', $input['id'])->update(['combustion' => $input['combustion'],
            'date_end' => $input['date_end']]);

        return redirect('driver/listOrderDriver');
    }
}