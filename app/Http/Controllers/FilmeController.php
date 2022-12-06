<?php

namespace App\Http\Controllers;

use App\Models\Filme;
use App\Models\Classificacao;

use Illuminate\Http\Request;

class FilmeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Instacia o objeto
        $filmes = Filme::orderBy('titulo')->paginate(20);

        //retorna view com listagem dos filmes
        return view('app.filme.index', ['titulo' => 'Lista de Filmes', 'filmes' => $filmes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Instacia o objeto
        $classificacoes = Classificacao::all();

        //retorna view de formulário de inclusão de filmes
        return view('app.filme.create', ['titulo' => 'Cadastra Filme', 'classificacoes' => $classificacoes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Salva os dados do formulário no banco de dados
        Filme::create($request->all());

        //redireciona para página index de filmes
        return redirect()->route('filme.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Filme  $filme
     * @return \Illuminate\Http\Response
     */
    public function show(Filme $filme)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Filme  $filme
     * @return \Illuminate\Http\Response
     */
    public function edit(Filme $filme)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Filme  $filme
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Filme $filme)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Filme  $filme
     * @return \Illuminate\Http\Response
     */
    public function destroy(Filme $filme)
    {
        //$filme = new Filme();
        
        $filme->delete();

        //redireciona para página index de filmes
        return redirect()->route('filme.index');
    }
}
