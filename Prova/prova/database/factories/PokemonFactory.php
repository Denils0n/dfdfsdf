<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PokemonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->name(),
            'ataque1' => $this->faker->name(),
            'ataque2' => $this->faker->name(),
            'ataque3' => $this->faker->name(),
            'ataque4' => $this->faker->name(),
            'user_id' => random_int(1,2),
        ];
    }
}
