<?php

namespace Database\Seeders;

use App\Models\Pilotos;
use Illuminate\Database\Seeder;

class PilotosSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $piloto = new Pilotos;
        $piloto->nombre = 'Elon Musk';
        $piloto->cui = 12345548958394;
        $piloto->fecha_nacimiento = '1965-05-05';
        $piloto->save();

        $piloto = new Pilotos;
        $piloto->nombre = 'Bill Gates';
        $piloto->cui = 435345435597934;
        $piloto->fecha_nacimiento = '1950-05-04';
        $piloto->save();
    }
}
