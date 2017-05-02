<?php

namespace App\Http\Controllers;

use App\Vehicle;
use Illuminate\Support\Facades\DB;
use Request as Req;
use Illuminate\Http\Request;

class VehicleController extends Controller
{

    public function show()
    {
        $vehicles = DB::table('vehicles')->paginate(2);
        if (count($vehicles) === 0 && $vehicles->currentPage() > 1) {
            $lastPage = $vehicles->lastPage(); // Get last page with results.
            $url = route('listVehicle') . '?page=' . $lastPage; // Manually build URL.
            return redirect($url);
        }
        return view('list-vehicle', ['vehicles' => $vehicles]);
    }

    public function create()
    {
        return view('form-vehicle');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'capacity' => 'required|integer|between:10,1000',
            'payload' => 'required|numeric|between:500,100000',
            'registration' => 'required|between:7,8',
            'combustion' => 'required|numeric|between:5,30'
        ]);

        $input = Req::all();
        Vehicle::create($input);
        \Session::flash('flash_message', 'Dodano nowy pojazd ;)');
        return redirect('admin/addVehicle');
    }

    public function destroy($id)
    {
        $vehicle = Vehicle::findOrFail($id);
        $vehicle->delete();
        \Session::flash('flash_message', 'udało się wyciepać pojazd ;)');
        return back();
    }
}