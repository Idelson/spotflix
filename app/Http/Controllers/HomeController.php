<?php

namespace App\Http\Controllers;

use App\Models\Lista;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        //cria o objeto com todas as listas
        $listas = Lista::orderBy('nome')->paginate(15);
        //retorna a view home da aplicação com parâmetro de todas as listas
        return view('app.home.index', ['listas' => $listas]);
    }

    public function show(Request $request){
        $listas = Lista::where('nome', 'like', '%'.$request->input('nome').'%')->orderBy('nome')->paginate(15);
        return view('app.home.show',['listas'=>$listas]);
    }
}
