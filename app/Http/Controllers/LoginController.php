<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index(Request $request){

        //erro recuperado da rota,como parâmetro
        $erro = '';
        if($request->get('erro') == 1){
            $erro = 'Usuário e ou senha não existe!';
        } 
        if($request->get('erro') == 2){
            $erro = 'Necessário realizar login para ter acesso à página!';
        }

        //retorna a view de login
        return view('site.login', ['titulo'=>'Login', 'erro' =>$erro]);
    }

    public function autenticar(Request $request){
        //regras de validação
        $regras = ['usuario'=>'email', 'senha'=>'required'];

        //mensagens de feedback de validação
        $feedback = [
            'usuario.email' => 'O campo usuário (e-mail) é obrigatório!',
            'senha.required' => 'O campo senha é obrigatório!'
        ];


        $request->validate($regras, $feedback);

        //recupera os parâmetros do formulário
        $email = $request->get('usuario');
        $password = $request->get('senha');
        
        
        $user = new User();
        $usuario = $user->where('email', $email)->get()->first();
        
        if(Hash::check($password, $usuario->password)){
            session_start();
            $_SESSION['name'] = $usuario->name;
            $_SESSION['email'] = $usuario->email;
            return redirect()->route('app.home');
        }else{
            return redirect()->route('site.login', ['erro' => 1]);
        }

    }

    public function sair(){
        session_destroy();
        return redirect()->route('site.principal');
    }
}
