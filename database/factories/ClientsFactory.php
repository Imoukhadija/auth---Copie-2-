<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Clients>
 */
class ClientsFactory extends Factory
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
            'Nature' => $this->faker->name,
            'CIN_RC_IF' =>$this->faker->name,
    'civilite' => $this->faker->name(),
    
     'date_naissance' =>$this->faker->date("Y-m-d"),
     'genre' => $this->faker->name(),

     'Situation_familiale' =>$this->faker->name(),
    
     'Ville' =>$this->faker->name(),
     'code_postale' =>$this->faker-> randomDigit(),
     'telephone_fixe_mobile' =>$this->faker->phoneNumber(),
    
     'telephone_mobile' => $this->faker->phoneNumber(),
     'email' => $this->faker->email(),
    
     'categoriepermi' => $this->faker->name(),
    
     'lien_avec_le_souscripteur' =>$this->faker->name(),
     'CSP' => $this->faker->name(),

     'datepermis' =>$this->faker>date("Y-m-d"),
     'numeropermi' =>$this->faker->name(),
    
     'address' =>$this->faker->address(),
           
              
     
               
          
        ];
    }
}
