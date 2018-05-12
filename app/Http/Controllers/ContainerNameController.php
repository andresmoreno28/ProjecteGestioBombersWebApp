<?php

namespace App\Http\Controllers;

use App\ContainerName;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ContainerNameController extends Controller
{
    /**
     * Create a new controller instance.
     * Only authenticated users will be able to interact with the methods of the
     * ContainerNameController.
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
        $types = ContainerName::all();
        return view('contenidors.tipus.index', compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contenidors.tipus.create');
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
            'nom' => 'required|string'
        ]);

        // Crear el tipus (la validació ha sortit bé).
        $type = ContainerName::create([
            'nom' => $data['nom']
        ]);

        // Vista amb el llistat dels tipus de contenidors.
        return redirect()->action('ContainerNameController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $type = ContainerName::findOrFail($id);
        // return view('contenidors.tipus.show', compact('type'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $type = ContainerName::findOrFail($id);
        return view('contenidors.tipus.edit', compact('type'));
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
        $type = ContainerName::findOrFail($id);

        // Validar dades obtingudes del formulari.
        $data = $request->validate([
            'nom' => 'required|string'
        ]);

        // Actualitzar el tipus (la validació ha sortit bé).
        $type->update($data);

        // Vista amb el llistat del material.
        return redirect()->action('ContainerNameController@index');
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
        $type = ContainerName::findOrFail($id);

        // Esborrar el tipus.
        $type->delete();

        // Vista amb el llistat de tipus.
        return back()->with('success', "S'ha esborrat \"$type->nom\" de forma satisfactoria.");
    }
}
