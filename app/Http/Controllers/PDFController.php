<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use App\Region;
use App\User;
use App\Vehicle;
use App\Container;
use App\Material;
use Dompdf\Dompdf;
use Dompdf\Options;
use dompdf\dompdf\src\Adapter\CPDF;
use dompdf\dompdf\src\Exception;

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

    public function crearPDF()
    {     
      $data = $this->getData();
      
      $view =  \View::make('informes.report', $data)->render();

      $pdf = PDF::loadHTML($view);
      return $pdf->download('informe_'.$data['region']->codi.'-'.$data['user']->codi_parc.'-'.$data['vehicle']->codi.'_'.date('Ymd'));
    }

    public function getData()
    {
        //Agafem el vehicle mitjançant el seu "id"
        $vehicle = Vehicle::find(1);

        //Agafem l'usuari a través de la seva relació amb el vehicle
        $user = $vehicle->user;

        //Agafem la regió a través de la seva relació amb l'usuari
        $region = $user->region;      

        $contenidors = $vehicle->containers;

        $data = [
            'region' => $region,
            'user' => $user,
            'vehicle' => $vehicle,
            'contenidors' => $contenidors
        ];

        return $data;
    }
}
