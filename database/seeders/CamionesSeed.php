<?php

namespace Database\Seeders;

use App\Models\Camiones;
use Illuminate\Database\Seeder;

class CamionesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $camion = new Camiones;
        $camion->marca = 'MERCEDEZ-BENZ';
        $camion->linea = 'Full';
        $camion->modelo = '2004';
        $camion->placa = 'L-434534';
        $camion->save();

        $camion = new Camiones;
        $camion->marca = 'TESLA';
        $camion->linea = 'FULL';
        $camion->modelo = '2023';
        $camion->placa = 'L-5249493';
        $camion->save();
    }
}
