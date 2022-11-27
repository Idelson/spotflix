<?php

namespace App\Http\Controllers;

use App\Models\Lista;
use App\Models\ListaFilme;
use Illuminate\Http\Request;

class ListaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //cria o objeto com as listas somente do usuário logado
        $listas = Lista::orderBy('nome')->paginate(15)->where('user_id', $_SESSION['id']);
        //retorna a view e passa o parâmetro retornado da model
        return view('app.lista.index', ['listas' => $listas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Abre view de criar lista
        return view('app.lista.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lista = new Lista();
        $lista->nome = $request->get('nome');
        $lista->imagem = $request->get('imagem');
        $lista->user_id = $_SESSION['id'];
        $lista->save();
        return redirect()->route('lista.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lista  $lista
     * @return \Illuminate\Http\Response
     */
    public function show(Lista $lista)
    {
        //Abre view de visualização de lista
        return view('app.lista.show', ['lista'=>$lista]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lista  $lista
     * @return \Illuminate\Http\Response
     */
    public function edit(Lista $lista)
    {
        //abre view do formulário de edição
        return view('app.lista.edit', ['lista'=>$lista]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lista  $lista
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lista $lista)
    {
        //atualiza registro
        $lista->update($request->all());

        //redireciona para minhas listas
        return redirect()->route('lista.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lista  $lista
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lista $lista)
    {
        //Exclui todos os filmes da lista selecionada
        ListaFilme::where(['lista_id' => $lista->id])->delete();

        //Exclui a lista
        $lista->delete();

        //redireciona para minhas listas
        return redirect()->route('lista.index');
    }
}
