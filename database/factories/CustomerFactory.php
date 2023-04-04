<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Customer;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{

    protected $model = Customer::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title'=> $this->faker->sentence(3),         
            'description'=> $this->faker->paragraph(1),
            'price'=> $this->faker->randomFloat($maxDecimals = 2, $min = 4, $max = 100),
            'stock'=> $this->faker->numberBetween(1,10),          
            'status'=> $this->faker->randomElement(['Activo','Inactivo']),
        ];
    }
}
