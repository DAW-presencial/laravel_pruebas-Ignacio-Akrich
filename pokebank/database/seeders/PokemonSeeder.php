<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Pokemon;
use Illuminate\Support\Facades\DB;

 

class PokemonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pokemon = new Pokemon;

        $pokemon->name = 'Charmander';
        $pokemon->level = 5;
        $pokemon->capture_date = Carbon::now('Europe/Madrid');
        $pokemon->types = json_encode(['fuego']);
        $pokemon->gendre = 'male';
        $pokemon->description = 'Pokemon de tipo fuego';
        $pokemon->shiny = false;
        $pokemon->user_id = 1;
        $pokemon->save();

        DB::table('pokemons')->insert([
            'name' => 'Bulbasaur',
            'level' => 5,
            'capture_date' => Carbon::now('Europe/Madrid'),
            'types' => json_encode(['planta']),
            'gendre' => 'female',
            'description' => 'Pokemon tipo Planta',
            'shiny' => true,
            'user_id' => 1
        ]);



            
    }
}
