<?php

namespace App\Http\Controllers;

use App\Models\ListaFilme;
use App\Models\Lista;
use App\Models\Filme;
use Illuminate\Http\Request;

class ListaFilmeController extends Controller
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
    public function create(Lista $lista)
    {
        $filmes = Filme::orderBy('titulo')->get();
        return view('app.lista_filme.create', ['lista'=>$lista, 'filmes'=>$filmes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Filme $filme)
    {
        echo $filme->id;
        //$listaFilme = new ListaFilme();
        //$listaFilme->
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ListaFilme  $listaFilme
     * @return \Illuminate\Http\Response
     */
    public function show(ListaFilme $listaFilme)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ListaFilme  $listaFilme
     * @return \Illuminate\Http\Response
     */
    public function edit(ListaFilme $listaFilme)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ListaFilme  $listaFilme
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ListaFilme $listaFilme)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ListaFilme  $listaFilme
     * @return \Illuminate\Http\Response
     */
    public function destroy(ListaFilme $listaFilme)
    {
        //
    }
}
