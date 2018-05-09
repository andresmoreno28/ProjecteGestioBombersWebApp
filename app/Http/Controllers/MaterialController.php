<?php

namespace App\Http\Controllers;

use App\Material;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class MaterialController extends Controller
{
    /**
     * Create a new controller instance.
     * Only authenticated users will be able to interact with the methods of the
     * MaterialController.
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
        $materials = Material::all();
        return view('materials.index', compact('materials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('materials.create');
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
            'referencia'         => 'required|string|unique:materials',
            'nom'                => 'required|string',
            'quantitat_prevista' => 'required|integer',
            'quantitat'          => 'integer',
            'es_del_parc'        => 'required|boolean',
        ]);

        // Crear el material (la validació ha sortit bé).
        $material = Material::create([
            'referencia'         => $data['referencia'],
            'nom'                => $data['nom'],
            'quantitat_prevista' => $data['quantitat_prevista'],
            'quantitat'          => $data['quantitat'],
            'es_del_parc'        => $data['es_del_parc']
        ]);

        // Vista amb el llistat del material.
        return redirect()->action('MaterialController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $material = Material::findOrFail($id);
        // return view('materials.show', compact('material'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $material = Material::findOrFail($id);
        return view('materials.edit', compact('material'));
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
        // Obtenir el material a actualitzar.
        $material = Material::findOrFail($id);

        // Validar dades obtingudes del formulari.
        $data = $request->validate([
            'referencia'         => [
                'required',
                'string',
                // Ignorar referència del material que s'edita perquè la referència
                // ha de ser única a la taula.
                Rule::unique('materials')->ignore($material->id)
            ],
            'nom'                => 'required|string',
            'quantitat_prevista' => 'required|integer',
            'quantitat'          => 'integer',
            'es_del_parc'        => 'required|boolean',
        ]);

        // Actualitzar el material (la validació ha sortit bé).
        $material->update($data);

        // Vista amb el llistat del material.
        return redirect()->action('MaterialController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Obtenir el material a esborrar.
        $material = Material::findOrFail($id);

        // Esborrar el material.
        $material->delete();

        // Vista amb el llistat del material.
        return back()->with('success', "S'ha esborrat \"$material->nom\" de forma satisfactoria.");
    }
}
