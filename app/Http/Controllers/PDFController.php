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

    public function crearPDF()
    {
        //Agafem el vehicle mitjançant el seu "id"
        $vehicle = Vehicle::findOrFail(1);
        //Agafem l'usuari a través de la seva relació amb el vehicle
        $user = $vehicle->user;
        //Agafem la regió a través de la seva relació amb l'usuari
        $region = $user->region;      
        
        $contenedors = Container::all();
        $materials = Material::all();

        return view('informes.report', ['region' => $region,'user' => $user, 'vehicle' => $vehicle,'contenedors' => $contenedors, 'materials' => $materials]);
    }
}
