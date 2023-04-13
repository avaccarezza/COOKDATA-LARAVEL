<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\App>
 */
class AppFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'app' => $this->faker->randomElement(['Database','Gestion','Produccion']),
            'type_of_app' => $this->faker->randomElement(['Informes','Aplicaciones','Soporte']),
            'customer_id' =>$this->faker->randomElement([1,2,3]),
            

            
        ];
    }
}
