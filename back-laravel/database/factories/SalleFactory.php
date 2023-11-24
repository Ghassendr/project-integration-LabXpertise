<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Salle>
 */
class SalleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'numeroSalle' => $this->faker->unique()->regexify('[A-Z]{3}\d{3}'),
            'nombrePoste' => $this->faker->numberBetween(10, 50),
            'projecteur' => $this->faker->boolean(),
            'debit' => $this->faker->randomFloat(2, 1, 10),
            'nombreTable' => $this->faker->numberBetween(5, 20),
        ];
    }
}
