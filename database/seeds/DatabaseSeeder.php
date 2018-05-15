<?php
use App\User;
use App\Region;
use App\VehicleType;
use App\VehicleInsurer;
use App\VehicleOwner;
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
          'nom'  => 'REC'
      ]);
      Region::create([
          'codi' => '02',
          'nom'  => 'REG'
      ]);
      Region::create([
          'codi' => '03',
          'nom'  => 'RELL'
      ]);
      Region::create([
          'codi' => '04',
          'nom'  => 'REMN'
      ]);
      Region::create([
          'codi' => '05',
          'nom'  => 'REMS'
      ]);
      Region::create([
          'codi' => '06',
          'nom'  => 'RET'
      ]);
      Region::create([
          'codi' => '07',
          'nom'  => 'RETE'
      ]);
      Region::create([
          'codi' => '08',
          'nom'  => 'NO OCUP'
      ]);
      Region::create([
          'codi' => '09',
          'nom'  => 'DG'
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

      /* VEHICLES / PROPIETARI
      ----------------------------------------------------------------------- */
      VehicleOwner::create([
        'nom'     => 'ALPHABET ESPAÑA',
        'telefon' => '902374837'
      ]);
      VehicleOwner::create([
        'nom'     => 'ARVAL SERVICE LEASE, S.A.',
        'telefon' => '901121965'
      ]);
      VehicleOwner::create([
        'nom'     => 'BANESTO RENTING, S.A.',
        'telefon' => null
      ]);
      VehicleOwner::create([
        'nom'     => 'BANSALEASE, S.A.',
        'telefon' => null
      ]);
      VehicleOwner::create([
        'nom'     => 'CAIXARENTING, S.A.',
        'telefon' => null
      ]);
      VehicleOwner::create([
        'nom'     => 'CESSIÓ AJ.ASCÓ',
        'telefon' => null
      ]);
      VehicleOwner::create([
        'nom'     => 'GENERALITAT DE CATALUNYA',
        'telefon' => null
      ]);
      VehicleOwner::create([
        'nom'     => 'ING CAR LEASE',
        'telefon' => '902374837'
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
