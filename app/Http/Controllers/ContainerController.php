<?php

namespace App\Http\Controllers;

use App\Container;
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
        $containers = Container::all();
        return view('contenidors.index', compact('containers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contenidors.create');
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
            'es_dun_vehicle'      => 'required|boolean',
            'container_parent_id' => 'required|integer',
            'container_name_id'   => 'required|integer',
            'user_id'             => 'required|integer',
            'vehicle_id'          => 'required|integer'
        ]);

        // Crear el tipus (la validació ha sortit bé).
        $container = Container::create([
            'es_dun_vehicle'      => $data['es_dun_vehicle'],
            'container_parent_id' => $data['container_parent_id'],
            'container_name_id'   => $data['container_name_id'],
            'user_id'             => $data['user_id'],
            'vehicle_id'          => $data['vehicle_id']
        ]);
        
        // Vista amb el llistat del material.
        // return redirect()->action('ContainerController@index');
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
        // Obtenir el tipus de contenidor a actualitzar.
        $container = Container::findOrFail($id);

        // Validar dades obtingudes del formulari.
        $data = $request->validate([
            'nom' => 'required|string'
        ]);

        // Actualitzar el tipus (la validació ha sortit bé).
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
        // Obtenir el tipus de contenidor a esborrar.
        $container = Container::findOrFail($id);

        // Esborrar el 
        $container->delete();

        // Vista amb el llistat de 
        return back()->with('success', "S'ha esborrat \"$container->nom\" de forma satisfactoria.");
    }
}
