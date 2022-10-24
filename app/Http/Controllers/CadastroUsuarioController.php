<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class CadastroUsuarioController extends Controller
{
    public function index(){
        //returna a view de cadastro de usuários
        return view('site.cadastrousuario', ['titulo'=>'Cadastro de Usuário']);
    }

    public function cadastrar(Request $request){
        // recupera o token. Grarante que o formulário seja o da própria aplicação. Se o acesso não for pelo formulário da aplicação, não gera token
        if($request->input('_token') != ''){

            // regras de validação dos campos no formulário
            $regras = [
                'name'  => 'required|min:3|max:40|unique:users',
                'email' => 'required|email',
                'password' => 'required|min:3|max:40'
            ];

            //Mensagem de retorno quando não seguidas as regras de validação.
            $feedback = [
                'name.min' => 'O campo nome deve ter no mínimo 3 caracteres.',
                'name.max' => 'O campo nome deve ter no máximo 40 caracteres.',
                'name.unique' => 'O nome informado já está em uso.'
            ];

            //aplica a validação com as regras e mensagem propostas
            $request->validate($regras, $feedback);

            //criação do objeto.
            $usuario = new User;
            //armazena dados do formulário no objeto
            $usuario->name = $request->name;
            $usuario->email = $request->email;
            //criptografa password
            $usuario->password = Hash::make($request->password);
            //salva no DB
            $usuario->save();
            //redireciona para página de login
            return redirect()->route('site.login');
        }
    }
}
