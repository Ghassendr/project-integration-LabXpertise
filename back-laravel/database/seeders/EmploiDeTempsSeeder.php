<?php

namespace Database\Seeders;

use App\Models\EmploiDeTemps;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmploiDeTempsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EmploiDeTemps::factory()->count(10)->create();
    }
}
