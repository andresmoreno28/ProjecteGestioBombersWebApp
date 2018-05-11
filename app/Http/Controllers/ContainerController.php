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
        // Cridem el mètode store() per crear, de forma automàtica, un
        // contenidor.
        return $this->store();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        // No hi ha validació perquè per poder afegir dades al contenidor, aquest
        // ha d'existir. Quan s'inicia la creació d'un contenidor aquest no existeix
        // fins que sigui confirmada l'acció de crear (botó de crear del formulari).
        // Així doncs, quan es duu a terme l'acció de crear un contenidor, aquest es
        // crea de forma automàtica (buit) i, tot seguit, passa a ser editat. A ulls
        // de l'usuari/ria s'estarà creant i així es podran assignar els seus ítems.
        
        // Crear el contenidor (automàticament).
        $container = Container::create();

        // Obtenir la ID del contenidor creat.
        $id = $container->id;
        
        // Enviem la ID al mètode edit($id) i prosseguim segon aquest.
        return $this->edit($id);
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
