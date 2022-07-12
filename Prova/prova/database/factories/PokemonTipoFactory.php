<?php

namespace Database\Factories;

use App\Models\Pokemon;
use App\Models\Tipo;
use Illuminate\Database\Eloquent\Factories\Factory;

class PokemonTipoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
           'pokemon_id' => Pokemon::all()->random()->id,
           'tipo_id' => Tipo::all()->random()->id,
           'iv' => Tipo::all()->random()->id,
        ];
    }
}
