<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Pokemon::create([
            'nome' => $request->nome,
            'ataque1' => $request->ataque1,
            'ataque2' => $request->ataque2,
            'ataque3' => $request->ataque3,
            'ataque4' => $request->ataque4,
            'user_id' => Auth::user()->id
        ]);
        return redirect('/dashboard');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function show(Pokemon $pokemon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function edit( $pokemon)
    {
        $pokemon = Pokemon::findOrFail($pokemon);
        return view('editar-pokemon', ['pokemon' => $pokemon]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $pokemon)
    {
        Pokemon::findOrFail($pokemon)->update($request->all());
        return redirect('/dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function destroy( $pokemon)
    {
        Pokemon::findOrFail($pokemon)->delete();
        //poe$pokemon::find($pokemon)->delete();
        return redirect()->back();
        //echo $pokemon;
    }
}
