<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeuPerfilController extends Controller
{
    public function index(){
        //retorna a view de perfil
        return view('app.meuperfil', ['titulo'=>'Meu Perfil']);
    }
}
