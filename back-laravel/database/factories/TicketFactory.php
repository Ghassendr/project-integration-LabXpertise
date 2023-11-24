<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ticket>
 */
class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'typeTicket' => $this->faker->randomElement(['Perte', 'Probleme Technique', 'Probleme Mecanique']),
            'details' => $this->faker->name(),
            'dateOpened' => $this->faker->date(),
            'dateClosed' => $this->faker->date(),
            'lastUpdate' => $this->faker->date(),
            'statue' => $this->faker->randomElement(['En Attent', 'Ouvert', 'En Cours', 'En Pause', 'Fermer']),
            'priorite' => $this->faker->randomElement(['Bas', 'Moyen', 'Haute', 'Critique']),
            'user_id' => function () {
                return \App\Models\User::inRandomOrder()->first()->id;
            },
            // 'user_id' => 1,
            'actif_id' => function () {
                return \App\Models\Actif::inRandomOrder()->first()->id;
            },
            'salle_id' => function () {
                return \App\Models\Salle::inRandomOrder()->first()->id;
            },
        ];
    }
}
