<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Actif;
use App\Models\Salle;
use App\Models\EmploiDeTemps;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ActifSeeder::class,
            SalleSeeder::class,
            LogicielSeeder::class,
            EmploiDeTempsSeeder::class,
            RoleSeeder::class,
            NotificationSeeder::class,
            TicketSeeder::class,

        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
