<?php
use App\User;
use App\Region;
use App\VehicleType;
use App\VehicleInsurer;
use App\ContainerName;
use App\Material;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      /* REGIONS
      ----------------------------------------------------------------------- */
      Region::create([
          'codi' => '01',
          'nom'     => 'REC'
      ]);
      Region::create([
          'codi' => '02',
          'nom'     => 'REG'
      ]);
      Region::create([
          'codi' => '03',
          'nom'     => 'RELL'
      ]);
      Region::create([
          'codi' => '04',
          'nom'     => 'REMN'
      ]);
      Region::create([
          'codi' => '05',
          'nom'     => 'REMS'
      ]);
      Region::create([
          'codi' => '06',
          'nom'     => 'RET'
      ]);
      Region::create([
          'codi' => '07',
          'nom'     => 'RETE'
      ]);
      Region::create([
          'codi' => '08',
          'nom'     => 'NO OCUP'
      ]);
      Region::create([
          'codi' => '09',
          'nom'     => 'DG'
      ]);

      /* USUARIS / PARCS
      ----------------------------------------------------------------------- */
      User::create([
          'codi_parc' => '21',
          'name'     => 'Amposta',
          'region_id' => '7',
          'password' => bcrypt('123456')
      ]);
      User::create([
        'codi_parc' => '20',
        'name'     => 'Ametlla',
        'region_id' => '7',
        'password' => bcrypt('123456')
      ]);
      User::create([
        'codi_parc' => '22',
        'name'     => 'Asco',
        'region_id' => '7',
        'password' => bcrypt('123456')
      ]);
      User::create([
        'codi_parc' => '23',
        'name'     => 'Batea',
        'region_id' => '7',
        'password' => bcrypt('123456')
      ]);
      User::create([
        'codi_parc' => '24',
        'name'     => 'Benifallet',
        'region_id' => '7',
        'password' => bcrypt('123456')
      ]);
      User::create([
        'codi_parc' => '25',
        'name'     => 'Flix',
        'region_id' => '7',
        'password' => bcrypt('123456')
      ]);
      User::create([
        'codi_parc' => '26',
        'name'     => 'Gandesa',
        'region_id' => '7',
        'password' => bcrypt('123456')
      ]);
      User::create([
        'codi_parc' => '27',
        'name'     => 'Horta',
        'region_id' => '7',
        'password' => bcrypt('123456')
      ]);
      User::create([
        'codi_parc' => '28',
        'name'     => 'Mora',
        'region_id' => '7',
        'password' => bcrypt('123456')
      ]);
      User::create([
        'codi_parc' => '29',
        'name'     => 'Tivissa',
        'region_id' => '7',
        'password' => bcrypt('123456')
      ]);
      User::create([
        'codi_parc' => '30',
        'name'     => 'Tortosa',
        'region_id' => '7',
        'password' => bcrypt('123456')
      ]);
      User::create([
        'codi_parc' => '31',
        'name'     => 'Ulldecona',
        'region_id' => '7',
        'password' => bcrypt('123456')
      ]);
      User::create([
        'codi_parc' => '112',
        'name'     => 'SCR-112',
        'region_id' => '6',
        'password' => bcrypt('123456')
      ]);
      User::create([
        'codi_parc' => '128',
        'name'     => 'Rete_mora',
        'region_id' => '7',
        'password' => bcrypt('123456')
      ]);
      User::create([
        'codi_parc' => '130',
        'name'     => 'Rete_tort',
        'region_id' => '7',
        'password' => bcrypt('123456')
      ]);
      User::create([
        'codi_parc' => '600',
        'name'     => 'Taller_rete',
        'region_id' => '6',
        'password' => bcrypt('123456')
      ]);

      /* VEHICLES / TIPUS
      ----------------------------------------------------------------------- */
      VehicleType::create([
        'codi'       => 'BRP',
        'descripcio' => 'Bomba Rural Pesant',
        'nom'        => '30-33'
      ]);
      VehicleType::create([
        'codi'       => 'BFP',
        'descripcio' => 'Bomba Forestal Pesant',
        'nom'        => '34-37'
      ]);
      VehicleType::create([
        'codi'       => 'BFL / BRL',
        'descripcio' => 'Bomba Forestal-Rural Lleugera',
        'nom'        => '38-39'
      ]);
      VehicleType::create([
        'codi'       => 'BUP',
        'descripcio' => 'Bomba Urbana Pesant',
        'nom'        => '40-43'
      ]);
      VehicleType::create([
        'codi'       => 'BNP',
        'descripcio' => 'Bomba Nodrissa Pesant',
        'nom'        => '44-47'
      ]);
      VehicleType::create([
        'codi'       => 'BUL',
        'descripcio' => 'Bomba Urbana Lleugera',
        'nom'        => '48-49'
      ]);
      VehicleType::create([
        'codi'       => 'FSV',
        'descripcio' => 'Salvaments Varis',
        'nom'        => '50-55'
      ]);
      VehicleType::create([
        'codi'       => 'FRQ',
        'descripcio' => 'Risc Químic',
        'nom'        => '50-55'
      ]);
      VehicleType::create([
        'codi'       => 'FER',
        'descripcio' => 'Equips Respiratoris',
        'nom'        => '50-55'
      ]);
      VehicleType::create([
        'codi'       => 'FRM',
        'descripcio' => 'Rescats de Muntanya',
        'nom'        => '50-55'
      ]);
      VehicleType::create([
        'codi'       => 'FRA',
        'descripcio' => 'Rescats Aquàtics',
        'nom'        => '50-55'
      ]);
      VehicleType::create([
        'codi'       => 'FSA',
        'descripcio' => 'Salvaments Apícoles',
        'nom'        => '50-55'
      ]);
      VehicleType::create([
        'codi'       => 'BSAL',
        'descripcio' => 'Barques de Salvaments',
        'nom'        => '56-59'
      ]);
      VehicleType::create([
        'codi'       => 'AEA / AES / ABA',
        'descripcio' => 'Autoescales',
        'nom'        => '60-61'
      ]);
      VehicleType::create([
        'codi'       => 'AMB',
        'descripcio' => 'Ambulàncies',
        'nom'        => '62-69'
      ]);
      VehicleType::create([
        'codi'       => 'CCA / UPT',
        'descripcio' => 'Unitat de Suport al Comandament',
        'nom'        => '70-71'
      ]);
      VehicleType::create([
        'codi'       => 'UTP',
        'descripcio' => 'Vehicle de Transport de Personal',
        'nom'        => '72-73'
      ]);
      VehicleType::create([
        'codi'       => 'UCA',
        'descripcio' => 'Vehicle de Càrrega',
        'nom'        => '74-77'
      ]);
      VehicleType::create([
        'codi'       => 'UE',
        'descripcio' => 'Vehicles Especials',
        'nom'        => '78-79'
      ]);
      VehicleType::create([
        'codi'       => 'UPCL',
        'descripcio' => 'Unitats de Personal i Càrrega Lleugeres',
        'nom'        => '80-89'
      ]);
      VehicleType::create([
        'codi'       => 'USL',
        'descripcio' => 'Unitat de Suport Logístic',
        'nom'        => '80-89'
      ]);
      VehicleType::create([
        'codi'       => 'UPC',
        'descripcio' => 'Unitats de Personal i Càrrega',
        'nom'        => '90-99'
      ]);

      /* VEHICLES / ASSEGURADORA
      ----------------------------------------------------------------------- */
      VehicleInsurer::create([
        'nom'     => 'ZURICH',
        'telefon' => '902110666'
      ]);
      VehicleInsurer::create([
        'nom'     => 'AXA',
        'telefon' => '902374837'
      ]);
      VehicleInsurer::create([
        'nom'     => 'FIATC-seguros',
        'telefon' => null
      ]);

      /* CONTENIDORS / NOMS
      ----------------------------------------------------------------------- */
      ContainerName::create([
        'nom' => 'Banc eines (BE)'
      ]);
      ContainerName::create([
        'nom' => 'Bossa atac vivenda'
      ]);
      ContainerName::create([
        'nom' => 'Bossa blava'
      ]);
      ContainerName::create([
        'nom' => 'Bossa collarets'
      ]);
      ContainerName::create([
        'nom' => 'Bossa eines elèctriques'
      ]);
      ContainerName::create([
        'nom' => 'Bossa eines vehicle'
      ]);
      ContainerName::create([
        'nom' => 'Bossa EPI antitall'
      ]);
      ContainerName::create([
        'nom' => 'Bossa groga'
      ]);
      ContainerName::create([
        'nom' => 'Bossa negra'
      ]);
      ContainerName::create([
        'nom' => 'Bossa verda'
      ]);
      ContainerName::create([
        'nom' => 'Bossa vermella'
      ]);
      ContainerName::create([
        'nom' => 'Caixa eines'
      ]);
      ContainerName::create([
        'nom' => 'Caixa càmera tèrmica'
      ]);
      ContainerName::create([
        'nom' => 'Carro taller'
      ]);
      ContainerName::create([
        'nom' => 'ERA'
      ]);
      ContainerName::create([
        'nom' => 'Farmaciola'
      ]);
      ContainerName::create([
        'nom' => 'Kit apícola'
      ]);
      ContainerName::create([
        'nom' => 'Motxilla rescat'
      ]);
      ContainerName::create([
        'nom' => 'Motxilla sanitaria'
      ]);
      ContainerName::create([
        'nom' => 'Motxilles'
      ]);

      /* MATERIALS
      ----------------------------------------------------------------------- */
    }
}
