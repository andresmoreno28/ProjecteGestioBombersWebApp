<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use App\Region;
use App\User;
use App\Vehicle;
use App\Container;
use App\Material;

class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    public function crearPDF($id)
    {
        //Agafem totes les dades necessàries
        $vehicle = Vehicle::findOrFail($id);
        $parcs = $parcs->$vehicle;
        $regions = Region::all();      
        
        $contenedors = Container::all();
        $materials = Material::all();

        return view('informes.report', ['regions' => $regions,'parcs' => $parcs, 'vehicles' => $vehicles,'contenedors' => $contenedors, 'materials' => $materials]);
    }
}
