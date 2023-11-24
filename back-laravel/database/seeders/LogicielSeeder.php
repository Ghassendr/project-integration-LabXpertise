<?php

namespace Database\Seeders;

use App\Models\Logiciel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LogicielSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Logiciel::factory()
        ->count(10)
        ->create();
    }
}
