<?php

namespace App\Http\Controllers;

use App\Models\Lista;
use App\Models\ListaFilme;
use App\Models\ListaUsuario;
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
        //cria o objeto com as listas criadas pelo usuário logado
        $listas = Lista::orderBy('nome')->paginate(15)->where('user_id', $_SESSION['id']);

        //cria o objeto com listas de outros usuários que o usuário logado marcou para assistir
        $listaUsuarios = ListaUsuario::paginate(15)->where('user_id', $_SESSION['id']);

        //retorna a view e passa o parâmetros
        return view('app.lista.index', ['listas' => $listas, 'listaUsuarios' => $listaUsuarios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Retorna view com formulário para criar listas
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
        //Instacia o objeto
        $lista = new Lista();
        //atribui valores aos atributos(no caso, colunas da tabela de listas)
        $lista->nome = $request->get('nome');
        $lista->imagem = $request->get('imagem');
        $lista->user_id = $_SESSION['id'];

        //Salva os valores no banco de dados
        $lista->save();

        //redireciona para página de listas inicial
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
        //retorna view de visualização de lista
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
        //retorna view do formulário de edição
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

        //redireciona para página minhas listas
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

        //Exclui a lista de todos os usuários
        ListaUsuario::where(['lista_id' => $lista->id])->delete();

        //Exclui a lista do banco de dados
        $lista->delete();

        //redireciona para minhas listas
        return redirect()->route('lista.index');
    }
}
