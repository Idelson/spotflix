<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CriaListaController extends Controller
{
    public function index(){
        //retorna a view de criação de listas
        return view('app.crialista', ['titulo'=>'Cria Lista']);
    }
}
