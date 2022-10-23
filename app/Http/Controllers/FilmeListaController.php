<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilmeListaController extends Controller
{
    public function index(){
        //retorna a view de lista
        return view('app.filmelista', ['titulo'=>'Filmes']);
    }
}
