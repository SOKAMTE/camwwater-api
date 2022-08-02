<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CommercialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'devis_branchement' => $this->faker->name,
            'abonnement' => $this->faker->name,
            'fiche_poste' => $this->faker->name,
            'depose_compteur' => $this->faker->name,
            'rapport_activite' => $this->faker->name,
        ];
    }
}
