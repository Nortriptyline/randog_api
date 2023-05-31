<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dog>
 */
class DogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "gender" => fake()->boolean(),
            "age" => fake()->numberBetween(0, 30),
            "name" => fake()->name(),
            "weight" => fake()->randomFloat(2, 1, 75),
            "size" => fake()->randomFloat(2, 3, 175)
        ];
    }
}
