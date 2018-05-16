<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      Model::unguard();

      /* REGIONS
      ----------------------------------------------------------------------- */
      $this->call(RegionSeeder::class);
      $this->command->info('Taula de regions emplenada!');

      /* USUARIS / PARCS
      ----------------------------------------------------------------------- */
      $this->call(UserSeeder::class);
      $this->command->info('Taula de parcs emplenada!');
      
      /* VEHICLES / TIPUS
      ----------------------------------------------------------------------- */
      $this->call(VehicleTypeSeeder::class);
      $this->command->info('Taula de tipus de vehicles emplenada!');
      
      /* VEHICLES / ASSEGURADORA
      ----------------------------------------------------------------------- */
      $this->call(VehicleInsurerSeeder::class);
      $this->command->info('Taula de asseguradores de vehicles emplenada!');
      
      /* VEHICLES / PROPIETARI
      ----------------------------------------------------------------------- */
      $this->call(VehicleOwnerSeeder::class);
      $this->command->info('Taula de propietaris de vehicles emplenada!');
      
      /* CONTENIDORS / NOMS
      ----------------------------------------------------------------------- */
      $this->call(ContainerNameSeeder::class);
      $this->command->info('Taula de tipus de contenidors emplenada!');
      
      /* MATERIALS
      ----------------------------------------------------------------------- */
      $path = 'database/sql/materials.sql';
      DB::unprepared(file_get_contents($path));
      $this->command->info('Taula de materials emplenada!');
    }
}
