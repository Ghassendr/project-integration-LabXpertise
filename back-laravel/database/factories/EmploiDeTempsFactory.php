<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EmploiDeTemps>
 */
class EmploiDeTempsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'jour' => $this->faker->randomElement(['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi']),
            'prof1' => $this->faker->name(),
            'prof2' => $this->faker->name(),
            'prof3' => $this->faker->name(),
            'prof4' => $this->faker->name(),
            'prof5' => $this->faker->name(),
            'prof6' => $this->faker->name(),
            'salle_id' => function () {
                return \App\Models\Salle::inRandomOrder()->first()->id;
            }
        ];
    }
}
