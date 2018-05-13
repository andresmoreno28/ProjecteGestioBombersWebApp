<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use App\Region;
use App\User;
use App\Vehicle;
use App\Container;
use App\Material;
use Illuminate\Support\Collection as Collection;

class PDFController extends Controller
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
        
    }

    public function crearPDF()
    {
      
        //Agafem el vehicle mitjançant el seu "id"
        $vehicle = Vehicle::findOrFail(1);

        //Agafem l'usuari a través de la seva relació amb el vehicle
        $user = $vehicle->user;

        //Agafem la regió a través de la seva relació amb l'usuari
        $region = $user->region;      

        $contenidors = $vehicle->containers;
       
       /* $c = 0;
        foreach ($contenidors as $contenidor) 
        {
            $materialsFromContainers[$c] = $contenidor->materials;
            
            foreach ($containerMaterial as $material)
            {
              dd($material->all()[0]);
            }
            $c++;
        }*/

        //dd($materialsFromContainers);
       //$nomContenidor = Container::find(1)->nom;

        

        
        return view('informes.report', ['region' => $region,'user' => $user, 'vehicle' => $vehicle,'contenidors' => $contenidors]);
    }
}
