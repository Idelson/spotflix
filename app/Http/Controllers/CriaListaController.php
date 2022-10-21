<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CriaListaController extends Controller
{
    public function index(){
        return view('app.crialista', ['titulo'=>'Cria Lista']);
    }
}
