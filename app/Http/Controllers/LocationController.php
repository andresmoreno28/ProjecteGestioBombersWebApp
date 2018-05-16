<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;
use App\Region;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

class LocationController extends Controller
{
    /**
     * Create a new controller instance.
     * Only authenticated users will be able to interact with the methods of the
     * ContainerController.
     *
     * @return void
     */
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
        //Agafa totes les poblacions
        $locations = Location::paginate(8);
        //Retorna a la pàgina d'index de poblacions amb l'objecte $locations
        return view('parcs/locations.index', ['locations' => $locations]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $regions = Region::get();
        //Crea un nou objecte
        $location = new location();
        //Retorna al formulari l'objecte per a guardar les dades en ell
        return view('parcs/locations._form', ['location'=>$location, 'regions' =>$regions]);
                                            
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
          'codi' => 'required|unique:locations',
          'nom'  => 'required|string|max:255',
          'region_id' => 'required',
        ]);

        // Crear població (la validació ha sortit bé).
        Location::create([
        'codi' => $data['codi'],
        'nom'  => $data['nom'],
        'region_id'  => $data['region_id'],
        ]);

        // Crea missatge d'èxit
        $missatge = session()->flash('success', 'S\'ha afegit la població: '.$data['nom'].'.');
        // Retorna a l'index de poblacions amb el missatge
        return redirect()->route('location.index')->with($missatge);
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
        // Cerquem la població.
        $regions = Region::get();
        $location = Location::findOrFail($id);
        // Retorna al formulari amb l'objecte $location
        return view('parcs/locations._form', ['regions' => $regions, 'location' => $location]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Responses
     */
    public function update(Request $request, $id)
    {
        // Validar dades obtingudes del formulari.
        $location = Location::findOrFail($id);

        $data = $request->validate([
          'codi' => [
                'required',
                Rule::unique('locations')->ignore($location->id)
            ],
          'nom'  => 'required|string|max:255',
          'region_id' => 'required',
        ]);
        //Realitza l'actualització de la població indicada per l'id
        $location->update($data);
        //Retorna a l'index de poblacions
        return redirect()->action('LocationController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //S'agafa la població mitjançant l'id
        $location = Location::findOrFail($id);

        //S'elimina
        $location->delete();

        //Es mostra un missatge d'èxit
        $missatge=session()->flash('success', 'Població eliminada!');
          return back()->with($missatge);
    }
}
