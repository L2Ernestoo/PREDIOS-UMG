<?php

namespace Database\Seeders;

use App\Models\EstatusServicio;
use Illuminate\Database\Seeder;

class EstatusServiciosSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $estatus = new EstatusServicio;
        $estatus->id = 1;
        $estatus->descripcion = 'Ingreso';
        $estatus->save();

        $estatus = new EstatusServicio;
        $estatus->id = 2;
        $estatus->descripcion = 'Salida';
        $estatus->save();

    }
}
