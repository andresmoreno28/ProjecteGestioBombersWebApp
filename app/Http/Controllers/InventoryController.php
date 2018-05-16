<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Material;
use App\Vehicle;
use App\Container;
use App\ContainerMaterial;

class InventoryController extends Controller
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
  	public function update(Request $request)
  	{
  		/*Se realitza una iteració per a relacionar els arrays d'ids de la taula ContainerMaterial amb el número de quantitat real corresponent*/
  		for ($i = 0; $i < count($request->real); $i++)
  		{
  			//Es guarden l'ids i les quantitats en variables
  			$id = $request->id_cont_mat[$i];
  			$quantitat = $request->real[$i];

  			//S'agafa el registre corresponent de la taula container_material a través del seu model
  			$contMat = ContainerMaterial::findOrFail($id);

  			//Es fa l'update de la quantitat al lloc corresponent
  			$contMat->update(['quantitat' => $quantitat]);
 					
  		}
  		//Es crea un missatge d'èxit en l'actualització
  		$missatge=session()->flash('success', 'Stock actualitzat');
  		//Es retorna enrere a la vista del formulari amb el missatge
  		return back()->with($missatge);
  	}
}
