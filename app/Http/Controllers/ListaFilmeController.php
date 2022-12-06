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
        //Cria objeto com os filmes
        $filmes = Filme::orderBy('titulo')->get();

        //Retorna a view para visualização dos filmes por lista
        return view('app.lista_filme.create', ['lista'=>$lista, 'filmes'=>$filmes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Lista $lista)
    {   
        //Persiste os filmes no banco de dados
        $lista->filmes()->attach($request->get('filme_id'),['status'=>'ativo']);

        //Redireciona para inclusão/exclusão de filmes de uma lista
        return redirect()->route('lista-filme.create',['lista'=>$lista->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ListaFilme  $listaFilme
     * @return \Illuminate\Http\Response
     */
    public function show(/*ListaFilme $listaFilme*/Lista $lista)
    {
        //Retorna view visualização de filmes por lista
        return view('app.lista_filme.show',['lista'=>$lista]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ListaFilme  $listaFilme
     * @return \Illuminate\Http\Response
     */
    public function edit(/*ListaFilme $listaFilme*/Lista $lista)
    {
        //Retorna view com formulário de edição de filmes na lista
        return view('app.lista_filme.edit', ['lista'=>$lista]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ListaFilme  $listaFilme
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, /*ListaFilme $listaFilme*/Lista $lista)
    {
        /* Não precisou do update, esta atualização é somente inclusão e exclusão de filmes da lista
        $lista->update($request->all());
        return redirect()->route('lista.index');
        */
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ListaFilme  $listaFilme
     * @return \Illuminate\Http\Response
     */
    public function destroy(ListaFilme $listaFilme, $lista_id)
    {
        //Exclui filme da listagem de filmes de uma lista
        $listaFilme->delete();
        
        //Redireciona para inclusão/exclusão de filmes de uma lista
        return redirect()->route('lista-filme.create',['lista'=>$lista_id]);
    }
}
