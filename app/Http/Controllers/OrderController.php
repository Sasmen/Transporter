<?php

namespace App\Http\Controllers;
use App\Order;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
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

        $orders = DB::table('orders')->paginate(2);
        if (count($orders) === 0  && $orders->currentPage() > 1) {
            $lastPage = $orders->lastPage(); // Get last page with results.
            $url = route('listOrder').'?page='.$lastPage; // Manually build URL.
            return redirect($url);
        }

        return view('list-order', ['orders' => $orders]);
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
            'driver_id' => 'required',
            'capacity' => 'required|integer|max:1000',
            'payload' => 'required|numeric|max:100000'
        ]);

        $input = Req::all();
        $vehicle = DB::table('vehicles')->where([
            ['payload', '>=', $input['payload']],
            ['capacity', '>=', $input['capacity']],
            ['available', '=', true]
        ])->first();

        if(!$vehicle) {
            \Session::flash('flash_error', 'Nie ma pojazdów o podanej pojemności lub ładowności  ;( ');
            return back()->withInput(Input::all());
        }

        $input['vehicle_id'] = $vehicle->id;
        Order::create($input);
        \Session::flash('flash_message', 'Dodano zlecenie ;)');
        return redirect('admin/addOrder');
    }

    public function destroy($id) {

        $order = Order::findOrFail($id);
        $order->delete();
        \Session::flash('flash_message', 'udało się wyciepać zlecenie ;)');
        return back();
    }

    public function endOrder($id) {
        $order = Order::findOrFail($id);
        $order->update(['date_end' => date('Y-m-d')]);
        \Session::flash('flash_message', 'zakończono zlecenie ;)');
        return back();
    }

}