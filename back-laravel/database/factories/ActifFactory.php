<?php

namespace Database\Factories;

use App\Models\Salle;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Actif>
 */
class ActifFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'etat' => $this->faker->randomElement(['Normale', 'En panne', 'En cours de reparation']),
            'modele' => $this->faker->word,
            'type' => $this->faker->randomElement(['Pc', 'Souris', 'Clavier', 'Ecran', 'Unite']),
            'referance' => $this->faker->word,
            'salle_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
