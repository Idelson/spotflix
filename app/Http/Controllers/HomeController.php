<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        //retorna a view inicial da aplicação
        return view('app.home', ['titulo'=>'Home']);
    }
}
