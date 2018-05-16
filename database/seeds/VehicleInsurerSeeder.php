<?php

use App\VehicleInsurer;
use Illuminate\Database\Seeder;

class VehicleInsurerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
    }
}
