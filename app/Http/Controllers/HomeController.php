<?php

namespace App\Http\Controllers;

use App\Models\Lista;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        //retorna a view inicial da aplicação
        $listas = Lista::all();
        return view('app.home', ['listas' => $listas]);
    }
}
