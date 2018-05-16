<?php

use App\ContainerName;
use Illuminate\Database\Seeder;

class ContainerNameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
    }
}
