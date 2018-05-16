<?php

use App\VehicleType;
use Illuminate\Database\Seeder;

class VehicleTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        VehicleType::create([
            'nom'        => 'BRP',
            'descripcio' => 'Bomba Rural Pesant',
            'codi'       => '30-33'
        ]);
        VehicleType::create([
            'nom'        => 'BFP',
            'descripcio' => 'Bomba Forestal Pesant',
            'codi'       => '34-37'
        ]);
        VehicleType::create([
            'nom'        => 'BFL / BRL',
            'descripcio' => 'Bomba Forestal-Rural Lleugera',
            'codi'       => '38-39'
        ]);
        VehicleType::create([
            'nom'        => 'BUP',
            'descripcio' => 'Bomba Urbana Pesant',
            'codi'       => '40-43'
        ]);
        VehicleType::create([
            'nom'        => 'BNP',
            'descripcio' => 'Bomba Nodrissa Pesant',
            'codi'       => '44-47'
        ]);
        VehicleType::create([
            'nom'        => 'BUL',
            'descripcio' => 'Bomba Urbana Lleugera',
            'codi'       => '48-49'
        ]);
        VehicleType::create([
            'nom'        => 'FSV',
            'descripcio' => 'Salvaments Varis',
            'codi'       => '50-55'
        ]);
        VehicleType::create([
            'nom'        => 'FRQ',
            'descripcio' => 'Risc Químic',
            'codi'       => '50-55'
        ]);
        VehicleType::create([
            'nom'        => 'FER',
            'descripcio' => 'Equips Respiratoris',
            'codi'       => '50-55'
        ]);
        VehicleType::create([
            'nom'        => 'FRM',
            'descripcio' => 'Rescats de Muntanya',
            'codi'       => '50-55'
        ]);
        VehicleType::create([
            'nom'        => 'FRA',
            'descripcio' => 'Rescats Aquàtics',
            'codi'       => '50-55'
        ]);
        VehicleType::create([
            'nom'        => 'FSA',
            'descripcio' => 'Salvaments Apícoles',
            'codi'       => '50-55'
        ]);
        VehicleType::create([
            'nom'        => 'BSAL',
            'descripcio' => 'Barques de Salvaments',
            'codi'       => '56-59'
        ]);
        VehicleType::create([
            'nom'        => 'AEA / AES / ABA',
            'descripcio' => 'Autoescales',
            'codi'       => '60-61'
        ]);
        VehicleType::create([
            'nom'        => 'AMB',
            'descripcio' => 'Ambulàncies',
            'codi'       => '62-69'
        ]);
        VehicleType::create([
            'nom'        => 'CCA / UPT',
            'descripcio' => 'Unitat de Suport al Comandament',
            'codi'       => '70-71'
        ]);
        VehicleType::create([
            'nom'        => 'UTP',
            'descripcio' => 'Vehicle de Transport de Personal',
            'codi'       => '72-73'
        ]);
        VehicleType::create([
            'nom'        => 'UCA',
            'descripcio' => 'Vehicle de Càrrega',
            'codi'       => '74-77'
        ]);
        VehicleType::create([
            'nom'        => 'UE',
            'descripcio' => 'Vehicles Especials',
            'codi'       => '78-79'
        ]);
        VehicleType::create([
            'nom'        => 'UPCL',
            'descripcio' => 'Unitats de Personal i Càrrega Lleugeres',
            'codi'       => '80-89'
        ]);
        VehicleType::create([
            'nom'        => 'USL',
            'descripcio' => 'Unitat de Suport Logístic',
            'codi'       => '80-89'
        ]);
        VehicleType::create([
            'nom'        => 'UPC',
            'descripcio' => 'Unitats de Personal i Càrrega',
            'codi'       => '90-99'
        ]);
    }
}
