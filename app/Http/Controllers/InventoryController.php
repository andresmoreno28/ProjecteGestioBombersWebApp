<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Material;
use App\Vehicle;
use App\Container;
use App\ContainerMaterial;

class InventoryController extends Controller
{

    public function __construct()
  	{
      $this->middleware('auth');
  	}


  	public function update(Request $request)
  	{
  		$contMat = ContainerMaterial::findOrFail($request->id_cont_mat[0]);

  		$quantitat = ContainerMaterial::where('quantitat', 2)->first();
  		//dd($request);

  		for ($i = 0; $i < count($request->real); $i++)
  		{
  			$id = $request->id_cont_mat[$i];
  			$quantitat = $request->real[$i];

  			$contMat = ContainerMaterial::findOrFail($id);

  			$contMat->update(['quantitat' => $quantitat]);
 					
  		}

  		$missatge=session()->flash('success', 'Stock actualitzat');
  		return back()->with($missatge);
  	}
}
