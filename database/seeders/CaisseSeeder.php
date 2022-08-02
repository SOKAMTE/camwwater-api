<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Caisse;

class CaisseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Caisse::factory()
            ->count(5)
            ->create();
    }
}
