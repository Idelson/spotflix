<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MinhaListaController extends Controller
{
    public function index(){
        return view('app.minhalista', ['titulo'=>'Minhas Listas']);
    }
}
