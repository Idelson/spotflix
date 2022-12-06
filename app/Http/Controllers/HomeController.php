<?php

namespace App\Http\Controllers;

use App\Models\Lista;
use App\Models\ListaUsuario;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request){
        
        //cria o objeto com todas as listas
        $listas = Lista::orderBy('nome')->paginate(10);

        //cria o objeto de listas por usuários
        $listaUsuarios = ListaUsuario::all();

        //retorna a view home da aplicação com parâmetro de todas as listas
        return view('app.home.index', ['listas' => $listas, 'listaUsuarios'=>$listaUsuarios, 'request'=>$request]);
    }

    public function show(Request $request){

        //cria o objeto com os registros cujo parte deles foi digitado no formulário de pesquisa
        $listas = Lista::where('nome', 'like', '%'.$request->input('nome').'%')->orderBy('nome')->paginate(15);
        //retorna view listando os registros da consulta
        return view('app.home.show',['listas'=>$listas]);
    }
}
