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

    /**
     * Filtre de vehicles AJAX.
     *
     * @return \Illuminate\Http\Response
     */
    public function filtre($id)
    {
      if ($id=="a") {
        $vehicles1= Vehicle::get();
        $array=array();
        $arr_length = count($vehicles1);
        for($i=0; $i < $arr_length; $i++){
            $array[$i][0]=$vehicles1[$i]->codigo();
            $array[$i][1]=$vehicles1[$i]->marca_model;
            $array[$i][2]=$vehicles1[$i]->type->codi;
            $array[$i][3]=$vehicles1[$i]->matricula;
            $array[$i][4]=$vehicles1[$i]->insurers->nom;
            $array[$i][5]=$vehicles1[$i]->id;
        }

      }else{

        $vehicles1= Vehicle::where('user_id', $id)->get();
        $array=array();
        $arr_length = count($vehicles1);
        for($i=0; $i < $arr_length; $i++){
            $array[$i][0]=$vehicles1[$i]->codigo();
            $array[$i][1]=$vehicles1[$i]->marca_model;
            $array[$i][2]=$vehicles1[$i]->type->codi;
            $array[$i][3]=$vehicles1[$i]->matricula;
            $array[$i][4]=$vehicles1[$i]->insurers->nom;
            $array[$i][5]=$vehicles1[$i]->id;
        }
      }

        return response()->json(['response' => 'success', 'vehicles' => $array]);
    }
}
