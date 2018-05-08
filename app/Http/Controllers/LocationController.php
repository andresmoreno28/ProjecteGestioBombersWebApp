<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;
use Illuminate\Support\Facades\DB;

class LocationController extends Controller
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
        //Agafa totes les poblacions
        $locations = Location::get();
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
        //Crea un nou objecte
        $location = new location();
        //Retorna al formulari l'objecte per a guardar les dades en ell
        return view('parcs/locations._form')->with(['location'=>$location]);
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
        ]);

        // Crear població (la validació ha sortit bé).
        Location::create([
        'codi' => $data['codi'],
        'nom'  => $data['nom'],
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
        $location = Location::findOrFail($id);
        // Retorna al formulari amb l'objecte $location
        return view('parcs/locations._form', ['location' => $location]);
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
        //Realitza l'actualització de la població indicada per l'id
        $location = Location::findOrFail($id)->update($request->all());
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
