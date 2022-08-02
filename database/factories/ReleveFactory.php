<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ReleveFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom_agence' => $this->faker->name,
            'code_agence' => $this->faker->name,
            'nom_releveur' => $this->faker->name,
            'numero_compteur' => $this->faker->name,
            'nom_prenom' => $this->faker->name,
            'reference_abonne' => $this->faker->name,
            'ancien_index' => $this->faker->name,
            'nouvel_index' => $this->faker->name,
            'anomalie' => $this->faker->name,
            'photo' => $this->faker->name,
        ];
    }
}
