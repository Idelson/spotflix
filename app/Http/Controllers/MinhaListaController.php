<?php

namespace App\Http\Controllers;

use App\Models\MinhaLista;
use Illuminate\Http\Request;

class MinhaListaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $minhalistas = MinhaLista::all()->where('user_id', $_SESSION['id']);
        return view('app.minha_lista.index', ['minhaListas' => $minhalistas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('app.minha_lista.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $minhaLista = new MinhaLista();
        $minhaLista->nome = $request->get('nome');
        $minhaLista->imagem = $request->get('imagem');
        $minhaLista->user_id = $_SESSION['id'];
        $minhaLista->save();
        return redirect()->route('minha-lista.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MinhaLista  $minhaLista
     * @return \Illuminate\Http\Response
     */
    public function show(MinhaLista $minhaLista)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MinhaLista  $minhaLista
     * @return \Illuminate\Http\Response
     */
    public function edit(MinhaLista $minhaLista)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MinhaLista  $minhaLista
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MinhaLista $minhaLista)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MinhaLista  $minhaLista
     * @return \Illuminate\Http\Response
     */
    public function destroy(MinhaLista $minhaLista)
    {
        //
    }
}
