<?php

use App\VehicleOwner;
use Illuminate\Database\Seeder;

class VehicleOwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
    }
}
