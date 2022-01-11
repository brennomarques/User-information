<?php

namespace Database\Seeders;

use App\Models\Analyses;
use Illuminate\Database\Seeder;

class AnalysestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Analyses::factory()->count(5)->create();
    }
}
