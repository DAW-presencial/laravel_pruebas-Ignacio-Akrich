<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pokemon;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;


class PokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //coger los valores de la tabla
        $pokemons = Pokemon::all();

        //pasar a la view los pokemons
        return view('pokemons.index', compact('pokemons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //retornar formulario
        return view('pokemons.create');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //QueryBuilder
        Pokemon::create([
            //nombreCampoDatabase => $request->input('nombreCampoFormulario');
            'name' => $request->input('name'),
            'level' => $request->input('level'),
            'capture_date' => $request->input('capture_date'),
            'types' => json_encode($request->input('types')),
            'gendre' => $request->input('gendre'),
            'description' => $request->input('description'),
            'shiny' => $request->input('shiny'),
            'user_id' => Auth::user()->id
        ]);

        //redireccionar a la ruta de la lista de pokemons
        return redirect()->route('pokemons.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //cogemos la tabla Pokemon y buscamos el pokemon con el $id
        $pokemon = Pokemon::find($id);
        //pasamos por parametro el pokemon
        return view('pokemons.edit', compact('pokemon'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //QueryBuilder
        Pokemon::where('id',$id)->update([
            //nombreCampoDatabase => $request->input('nombreCampoFormulario');
            'name' => $request->input('name'),
            'level' => $request->input('level'),
            'types' => json_encode($request->input('types')),
            'gendre' => $request->input('gendre'),
            'description' => $request->input('description'),
            'shiny' => $request->input('shiny')
        ]);

        //redireccionar a la ruta de la lista de pokemons
        return redirect()->route('pokemons.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Eloquent
        Pokemon::destroy($id);

        //redireccionar a la ruta de la lista de pokemons
        return redirect()->route('pokemons.index');
    }
}
