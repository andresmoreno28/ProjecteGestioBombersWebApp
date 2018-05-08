<?php

namespace App\Http\Controllers;

use Auth;
use App\Region;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class RegionController extends Controller
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
        $regions = Region::get();
        return view('parcs/regions.index', ['regions' => $regions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $region = new region();     
        return view('parcs/regions._form')->with(['region'=>$region]);
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
          'codi' => 'required|unique:regions',
          'nom'  => 'required|string|max:255',
        ]);

        // Crear regió (la validació ha sortit bé).
        Region::create([
        'codi' => $data['codi'],
        'nom'  => $data['nom'],
        ]);


        $missatge = session()->flash('success', 'S\'ha afegit la regió: '.$data['nom'].'.');
    
        return redirect()->route('region.index');
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
        // Cerquem la regió.
      $region= Region::findOrFail($id);

      return view('parcs/regions._form', ['region' => $region]);
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
        $regions = Region::all();
        $region = Region::findOrFail($id)->update($request->all());
        
        return redirect()->action('RegionController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        //S'agafa la regió mitjançant l'id
        $region = Region::findOrFail($id);

        //S'elimina
        $region->delete();

        //Es mostra un missatge d'èxit
        $missatge=session()->flash('success', 'Regió eliminada!');
          return back()->with($missatge);  
    }
}
