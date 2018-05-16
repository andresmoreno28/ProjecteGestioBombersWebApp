<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
    }
}
