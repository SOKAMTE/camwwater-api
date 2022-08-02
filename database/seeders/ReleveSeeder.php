<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Releve;

class ReleveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Releve::factory()
            ->count(5)
            ->create();
    }
}
