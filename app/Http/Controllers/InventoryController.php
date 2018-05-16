<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Material;
use App\Vehicle;
use App\Container;
use App\ContainersMaterials;

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
  		$contMat = ContainersMaterials::findOrFail($request->id_cont_mat[0]);

  		dd($contMat);

  	}
}
