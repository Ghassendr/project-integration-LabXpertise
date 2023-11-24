<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Logiciel>
 */
class LogicielFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $path = $this->faker->image('storage/images', 'person', true, true, 'person', false);

        return [
            'nom' => $this->faker->unique()->word(),
            'photo' => $path,
        ];
    }
}
