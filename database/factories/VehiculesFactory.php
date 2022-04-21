<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vehicules>
 */
class VehiculesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [ 
             'nom' => $this->faker->name(),
        'usage' => $this->faker->name,
        'marque' =>$this->faker->name,
'catégorie' => $this->faker->name(),

 
 'version' => $this->faker->name(),

 'typemine' =>$this->faker->name(),

 'immatriculation' =>$this->faker->name(),
 'registration_date' =>$this->faker>date("Y-m-d"),
 'expiration_date' =>$this->faker>date("Y-m-d"),


 'status' => $this->faker->name(),
 
        ];
    }
}
