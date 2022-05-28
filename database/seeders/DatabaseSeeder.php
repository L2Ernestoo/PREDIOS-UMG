<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CustomerSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(CamionesSeed::class);
        $this->call(EstatusServiciosSeed::class);
        $this->call(NavierasSeed::class);
        $this->call(PilotosSeed::class);
        $this->call(PrediosSeed::class);

        Customer::factory(10)->create();
    }
}
