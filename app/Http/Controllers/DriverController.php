<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\DB;
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
        $drivers = DB::table('drivers')->paginate(2);
        if (count($drivers) === 0  && $drivers->currentPage() > 1) {
            $lastPage = $drivers->lastPage(); // Get last page with results.
            $url = route('listDriver').'?page='.$lastPage; // Manually build URL.
            return redirect($url);
        }

        //$drivers = Driver::all()->paginate(2);
        return view('list-driver', ['drivers' => $drivers]);
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
            'password' => 'required|string|min:6',
            'email' => 'required|string|email|max:255|unique:users'
        ]);

        $input = Req::all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        $input['user_id'] = $user->id;
        Driver::create($input);
        \Session::flash('flash_message', 'Dodano nowego kierowce ;)');
        return redirect('admin/addDriver');
    }
    public function destroy($id) {

        $driver = Driver::findOrFail($id);
        $driver->delete();
        \Session::flash('flash_message', 'udało się wyciepać kierowcę;)');
        return back();
    }
}