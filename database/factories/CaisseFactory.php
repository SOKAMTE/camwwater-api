<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CaisseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'recette' => $this->faker->name,
            'depense' => $this->faker->name,
            'encaissement' => $this->faker->name,
            'branchement' => $this->faker->name,
            'abonnement' => $this->faker->name,
        ];
    }
}
