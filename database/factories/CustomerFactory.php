<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $customer = Customer::class;
    public function definition()
    {
        return [
            'nombre'=>$this->faker->name,
            'direccion'=>$this->faker->address(),
            'correo'=>$this->faker->safeEmail(),
            'numero'=>$this->faker->e164PhoneNumber,
        ];
    }
}
