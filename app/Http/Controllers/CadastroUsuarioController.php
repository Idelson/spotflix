<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class CadastroUsuarioController extends Controller
{
    public function index(){
        return view('site.cadastrousuario', ['titulo'=>'Cadastro de Usuário']);
    }

    public function cadastrar(Request $request){
        $regras = [
            'name'  => 'required|min:3|max:40|unique:users',
            'email' => 'required|email',
            'password' => 'required|min:3|max:40'
        ];

        $feedback = [
            'name.min' => 'O campo nome deve ter no mínimo 3 caracteres.',
            'name.max' => 'O campo nome deve ter no máximo 40 caracteres.',
            'name.unique' => 'O nome informado já está em uso.'
        ];

        $request->validate($regras, $feedback);
        //User::create($request->all());
    
        $usuario = new User;
        $usuario->name = $request->name;
        $usuario->email = $request->email;
        $usuario->password = Hash::make($request->password);
        $usuario->save();
        return redirect()->route('site.login');

    }
}
