<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'eau_brute' => $this->faker->name,
            'eau_traite' => $this->faker->name,
            'pompe_lavage' => $this->faker->name,
            'horaire_agitateur' => $this->faker->name,
            'horaire_pompe_doseuse' => $this->faker->name,
            'horaire_pompe_refoulement' => $this->faker->name,
            'stock_produit' => $this->faker->name,
            'index_eneo' => $this->faker->name,
        ];
    }
}
