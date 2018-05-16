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
     * Generar el document PDF.
     *
     * @param  $id
     * @return array
     */
    public function crearPDF($id)
    {     
      $data = $this->getData($id);
      
      $view =  \View::make('informes.report', $data)->render();

      $pdf = PDF::loadHTML($view);
      return $pdf->download('informe_'.$data['region']->codi.'-'.$data['user']->codi_parc.'-'.$data['vehicle']->codi.'_'.date('Ymd'));
    }

    /**
     * Obtenir dades del vehicle.
     *
     * @param  $id_vehicle
     * @return array
     */
    public function getData($id_vehicle)
    {
        //Agafem el vehicle mitjançant el seu "id"
        $vehicle = Vehicle::find($id_vehicle);

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
