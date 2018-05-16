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
        //S'agafa les dades mitjançant el mètode getData() enviant l'id del
        //vehicle com a paràmetre  
        $data = $this->getData($id);

        //Crea l'objecte View amb la vista del disseny i les dades. Seguidament es renderitza 
        $view =  \View::make('informes.report', $data)->render();

        //Mitjançant el Facade PDF i el seu mètode loadHTML() es carrega la vista ja renderitzada
        $pdf = PDF::loadHTML($view);

        //Fa que es descarregui l'informe en pdf mitjançant el mètode download() possant-li ja un nom dinàmic pels codis de vehicle, regio i usuari i la data de la descàrrega.
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
        //Agafa el vehicle mitjançant el seu "id"
        $vehicle = Vehicle::find($id_vehicle);

        //Agafa l'usuari a través de la seva relació amb el vehicle
        $user = $vehicle->user;

        //Agafa la regió a través de la seva relació amb l'usuari
        $region = $user->region;      

        //Agafa tots els contenidors que té el vehicle en qüestió
        $contenidors = $vehicle->containers;

        //Introduïm totes les dades a un array associatiu
        $data = [
            'region' => $region,
            'user' => $user,
            'vehicle' => $vehicle,
            'contenidors' => $contenidors
        ];

        return $data;
    }
}
