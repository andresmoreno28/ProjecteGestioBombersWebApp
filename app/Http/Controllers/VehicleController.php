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

class VehicleController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $vehicle=new Vehicle;
      $asseguradores= VehicleInsurer::get();
      $vTypes= VehicleType::get();
      $vOwners= VehicleOwner::get();
      return view('vehicles._form')->with(['vehicle'=>$vehicle,'asseguradores'=>$asseguradores, 'vTypes'=>$vTypes, 'vOwners'=>$vOwners]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // Validar dades obtingudes del formulari.

      $data = $request->validate([
          'matricula' => 'required|unique:vehicles',
          'marca_model' => 'required',
          'num_xasis' => 'required|unique:vehicles',
          'asseg_num_polissa' => 'required',
          'vehicle_insurer_id' => 'required',
          'vehicle_owner_id' => 'required',
          'vehicle_type_id' => 'required',
          'asseg_tipus' => 'required',
          'roda_cadenes' => 'required',
      ]);

      // Crear l'usuari (la validació ha sortit bé).
      Vehicle::create([
        'matricula' => $data['matricula'],
        'marca_model' => $data['marca_model'],
        'roda_cadenes' => $data['roda_cadenes'],
        'num_xasis' => $data['num_xasis'],
        'donat_de_baixa' => $request['donat_de_baixa'],
        'asseg_num_polissa' => $data['asseg_num_polissa'],
        'vehicle_insurer_id' => $data['vehicle_insurer_id'],
        'asseg_tipus' => $data['asseg_tipus'],
        'vehicle_owner_id' => $data['vehicle_owner_id'],
        'vehicle_type_id' => $data['vehicle_type_id'],
        'places' => $request['places'],
        'matricula_data' => $request['matricula_data'],
        'matricula_tercera' => $request['matricula_tercera'],
        'motor_potencia' => $request['motor_potencia'],
        'roda_dimensio' => $request['roda_dimensio'],
        'eslora' => $request['eslora'],
        'km' => $request['km'],
        'proper_manteniment_km' => $request['proper_maneteniment_km'],
        'km_data' => $request['km_data'],
        'manteniment_data' => $request['manteniment_data'],
        'proper_manteniment_data' => $request['manteniment_data'],
        'hores_bomba' => $request['hores_bomba'],
        'itv_vigor' => $request['itv_vigor'],
        'itv_propera' => $request['itv_propera'],
        'baixa_prevista' => $request['baixa_prevista']

      ]);

      $missatge=session()->flash('success', 'S\'ha creat el nou vehicle '.$data['matricula'].'.');
      return redirect()->action('UserController@index')->with($missatge);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $vehicle= Vehicle::findOrFail($id);
      $asseguradores= VehicleInsurer::get();
      $vTypes= VehicleType::get();
      $vOwners= VehicleOwner::get();
      return view('vehicles._form', ['vehicle' => $vehicle,'asseguradores'=>$asseguradores, 'vTypes'=>$vTypes, 'vOwners'=>$vOwners]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      // Validar dades obtingudes del formulari.
      $vehicle = Vehicle::findOrFail($id);

      $data = $request->validate([
          'matricula' => 'required',
          'marca_model' => 'required',
          'num_xasis' => 'required',
          'asseg_num_polissa' => 'required',
          'vehicle_insurer_id' => 'required',
          'vehicle_owner_id' => 'required',
          'vehicle_type_id' => 'required',
          'asseg_tipus' => 'required',
          'roda_cadenes' => 'required',
      ]);

      // Crear l'usuari (la validació ha sortit bé).
      $vehicle->update([
        'matricula' => $data['matricula'],
        'marca_model' => $data['marca_model'],
        'roda_cadenes' => $data['roda_cadenes'],
        'num_xasis' => $data['num_xasis'],
        'donat_de_baixa' => $request['donat_de_baixa'],
        'asseg_num_polissa' => $data['asseg_num_polissa'],
        'vehicle_insurer_id' => $data['vehicle_insurer_id'],
        'asseg_tipus' => $data['asseg_tipus'],
        'vehicle_owner_id' => $data['vehicle_owner_id'],
        'vehicle_type_id' => $data['vehicle_type_id'],
        'places' => $request['places'],
        'matricula_data' => $request['matricula_data'],
        'matricula_tercera' => $request['matricula_tercera'],
        'motor_potencia' => $request['motor_potencia'],
        'roda_dimensio' => $request['roda_dimensio'],
        'eslora' => $request['eslora'],
        'km' => $request['km'],
        'proper_manteniment_km' => $request['proper_maneteniment_km'],
        'km_data' => $request['km_data'],
        'manteniment_data' => $request['manteniment_data'],
        'proper_manteniment_data' => $request['manteniment_data'],
        'hores_bomba' => $request['hores_bomba'],
        'itv_vigor' => $request['itv_vigor'],
        'itv_propera' => $request['itv_propera'],
        'baixa_prevista' => $request['baixa_prevista']

      ]);

      $missatge=session()->flash('success', 'S\'ha actualitzat el vehicle '.$data['matricula'].'.');
      return redirect()->action('UserController@index')->with($missatge);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
