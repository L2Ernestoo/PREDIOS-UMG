<?php

namespace Database\Seeders;

use App\Models\Predios;
use Illuminate\Database\Seeder;

class PrediosSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $predio = new Predios;
        $predio->nombre = 'EL THOR';
        $predio->direccion = 'Asgard Nueva Generacion';
        $predio->save();

        $predio = new Predios;
        $predio->nombre = 'MUELLE PUERTO BARRIOS';
        $predio->direccion = 'MUELLE PUERTO BARRIOS';
        $predio->save();

        $predio = new Predios;
        $predio->nombre = 'PREDIO STORM';
        $predio->direccion = 'Mjolnir 14 calle';
        $predio->save();
    }
}
