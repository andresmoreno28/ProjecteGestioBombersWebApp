<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Region;
use Illuminate\Support\Facades\DB;
use App\Vehicle;
use App\VehicleInsurer;
use App\VehicleType;
use App\VehicleOwner;
use Illuminate\Validation\Rule;
use App\qrImage;
use Illuminate\Http\Response;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $vehicles = Vehicle::where('donat_de_baixa', 0)->get();
      $users= User::get();
      return view('home', ['vehicles' => $vehicles, 'users'=>$users]);
    }
    public function filtre($id)
    {
        $vehicles= Vehicle::where('user_id', $id)->get();

        return response()->json(['response' => 'success', 'vehicles' => $vehicles]);
    }
}
