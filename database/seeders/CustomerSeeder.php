<?php
namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::create(array('nombre'=>'Juan Pablo Escobar',
            'direccion'=>'Avenida Principal calle hacia el exito No 3', 'correo' => 'test@outlook.com',
            'numero'=>'502 55555555'));

        $customer = new Customer();
        $customer->nombre='Jorge Morales';
        $customer->correo='jm@outlook.com';
        $customer->direccion='Avenida las americas';
        $customer->numero='50212345678';
        $customer->save();
    }
}
