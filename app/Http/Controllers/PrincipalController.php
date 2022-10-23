<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function index(){
        //retorna a view principal
        return view('site.principal', ['titulo'=>'Principal']);
    }
}
