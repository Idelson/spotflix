<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MinhaListaController extends Controller
{
    public function index(){
        //retorna a view de visualização das minhas listas
        return view('app.minhalista', ['titulo'=>'Minhas Listas']);
    }
}
