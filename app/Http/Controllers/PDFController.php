<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Barryvdh\Snappy\Facades\SnappyPdf as SPDF;
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
        //$data = array('region' => $region,'user' => $user, 'vehicle' => $vehicle,'contenidors' => $contenidors);

        $pdf = PDF::loadHTML($view);
        return $pdf->download('informe');

        //$snappy = SPDF::generate('http://www.w3schools.com', '/tmp/testPdf.pdf');

        /*return view('informes.report', ['region' => $region,'user' => $user, 'vehicle' => $vehicle,'contenidors' => $contenidors]);*/

        /*$options = new Dompdf\Options();
        $options->setDpi(150);
        $pdf = new \Dompdf($options);
        $pdf ->loadView('informes.report', $data)->save('informe.pdf');
        $pdf->render();
        return $pdf->stream('informe.pdf');*/

        // instantiate and use the dompdf class
       // $options = new Options();
        //$options->setDpi(150);
        //$dompdf = PDF::loadView('informes.report', $data);
        //$dompdf->setOptions($options);
        // (Optional) Setup the paper size and orientation
        //$dompdf->setPaper('A4', 'portrait');

        // Output the generated PDF to Browser
        //$dompdf->stream('informe.pdf');
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
