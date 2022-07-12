<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Factories\UserFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10 ; $i++) { 

            User::factory()->create([

                'email' => 'user'.$i.'@gmail.com'


            ]);

        }
        \App\Models\Tipo::factory(10)->create();
        \App\Models\Pokemon::factory(10)->create();
        \App\Models\PokemonTipo::factory(10)->create();
    }
}
