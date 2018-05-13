<?php

namespace App\Http\Controllers;

use App\Container;
use App\ContainerName;
use App\Material;
use App\User;
use App\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ContainerController extends Controller
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
        // Si no hi ha assignat cap parc ni cap usuari, diem que el contendor
        // està per assignar.
        $containersN = Container::where('user_id', '=', null)
            ->where('vehicle_id', '=', null)
            ->get();
        // Si no és d'un vehicle (0) i té assignat un usuari, diem que el contenidor
        // forma part del grup dels usuaris (parcs).
        $containersU = Container::where('es_dun_vehicle', '=', 0)
            ->where('user_id', '!=', null)
            ->get();
        
        // Si és d'un vehicle (1) i té assignat un vehicle, diem que el contenidor
        // forma part del grup dels vehicles.
        $containersV = Container::where('es_dun_vehicle', '=', 1)
            ->where('vehicle_id', '!=', null)
            ->get();

        // Comptar contenidors per mostrar el total en les pestanyes.
        $containersNC = $containersN->count();
        $containersUC = $containersU->count();
        $containersVC = $containersV->count();

        // Vista amb el llistat de contenidors. A la qual li passem arrays amb
        // dades de contenidors per assignar, de vehicles i d'usuaris.
        return view('contenidors.index', compact(
            'containersN',
            'containersU',
            'containersV',
            'containersNC',
            'containersUC',
            'containersVC'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        // Contenidors
        $containers = Container::all();

        // Noms de contenidors
        $containerNames = ContainerName::all();

        // Usuaris (parcs)
        $users = User::all();

        // Vehicles
        $vehicles = Vehicle::all();

        // Materials
        // ...

        // Si no hi ha noms de contenidors creats, no es permetrà accedir a la
        // pàgina de creació.
        if ($containerNames->isEmpty()) {
            // Vista amb el llistat de contenidors.
            return back()->with('warning', "No pot crear contenidors perquè encara no hi ha tipus d'aquests.");
        } else {
            // Vista de creació de contenidors.
            return view('contenidors.create', compact(
                'containers',
                'containerNames',
                'users',
                'vehicles'
            ));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Controlar si és un contenidor pare.
        if ($request['container_parent_id'] == "cap") {
            $request['container_parent_id'] = null;
        }

        // Controlar la ubicació del contenidor ("radio button").
        if ($request['es_dun_vehicle'] == 1) {
            $request['user_id'] = null;
        } else {
            $request['vehicle_id'] = null;
        }

        // Controlar els valors de la ubicació.
        if ($request['user_id'] == "cap") {
            $request['user_id'] = null;
        }
        if ($request['vehicle_id'] == "cap") {
            $request['vehicle_id'] = null;
        }

        // Validar dades obtingudes del formulari.
        $data = $request->validate([
            'container_parent_id' => 'nullable',
            'container_name_id'   => 'required',
            'es_dun_vehicle'      => 'required|boolean',
            'vehicle_id'          => 'nullable',
            'user_id'             => 'nullable'
        ]);

        // Crear el contenidor (la validació ha sortit bé).
        $type = Container::create([
            'container_parent_id' => $data['container_parent_id'],
            'container_name_id'   => $data['container_name_id'],
            'es_dun_vehicle'      => $data['es_dun_vehicle'],
            'vehicle_id'          => $data['vehicle_id'],
            'user_id'             => $data['user_id']
        ]);

        // Vista amb el llistat de contenidors.
        return redirect()->action('ContainerController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $container = Container::findOrFail($id);
        // return view('contenidors.show', compact('container'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $container = Container::findOrFail($id);
        return view('contenidors.edit', compact('container'));
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
        // Obtenir el contenidor a actualitzar.
        $container = Container::findOrFail($id);

        // Validar dades obtingudes del formulari.
        $data = $request->validate([
            'es_dun_vehicle'      => 'required|boolean',
            'container_parent_id' => 'required|integer',
            'container_name_id'   => 'required|integer',
            'user_id'             => 'required|integer',
            'vehicle_id'          => 'required|integer'
        ]);

        // Actualitzar el contenidor (la validació ha sortit bé).
        $container->update($data);

        // Vista amb el llistat del material.
        return redirect()->action('ContainerController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Obtenir el contenidor a esborrar.
        $container = Container::findOrFail($id);

        // Esborrar el contenidor.
        $container->delete();

        // Vista amb el llistat de contenidors.
        return back()->with('success', "S'ha esborrat \"$container->nom\" de forma satisfactoria.");
    }
}
