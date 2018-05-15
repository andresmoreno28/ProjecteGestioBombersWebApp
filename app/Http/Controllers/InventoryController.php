<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Material;
use App\Vehicle;
use App\Container;
use App\ContainersMaterials;

class InventoryController extends Controller
{
    public function __construct()
  	{
      $this->middleware('auth');
  	}

  	public function update(Request $request)
  	{
  		$contMat = ContainersMaterials::findOrFail($request->id_cont_mat[0]);

  		dd($contMat);

  	}
}
