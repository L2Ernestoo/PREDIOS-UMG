<?php

namespace Database\Seeders;

use App\Models\Navieras;
use Illuminate\Database\Seeder;

class NavierasSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $naviera = new Navieras;
        $naviera->nombre = 'CHIQUITA';
        $naviera->direccion = 'Barrios las champas';
        $naviera->telefono = '1234-5678';
        $naviera->save();

        $naviera = new Navieras;
        $naviera->nombre = 'Hapag-Lloyd';
        $naviera->direccion = 'Hamburgo, Alemania';
        $naviera->telefono = '9977-4394';
        $naviera->save();
    }
}
