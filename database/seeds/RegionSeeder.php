<?php

use App\Region;
use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
    }
}
