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
        
        // regras de validação dos campos no formulário
        $regras = ['usuario'=>'email', 'senha'=>'required'];

        //Mensagem de retorno quando não seguidas as regras de validação.
        $feedback = [
            'usuario.email' => 'O campo usuário (e-mail) é obrigatório!',
            'senha.required' => 'O campo senha é obrigatório!'
        ];

        //aplica a validação com as regras e mensagem propostas
        $request->validate($regras, $feedback);

        //recupera os parâmetros do formulário
        $email = $request->get('usuario');
        $password = $request->get('senha');
        
        //cria o objeto 
        $user = new User();
        //armazena na variável os atributos do usuário que o email é igual ao do digitado no formulário
        $usuario = $user->where('email', $email)->get()->first();
        

        //testa se a senha digitada no formulário é compatível com a do banco de dados.
        if($usuario != "" && Hash::check($password, $usuario->password)){
            //starta a sessão
            session_start();

            //armazena nome na global SESSION para manter a conecção entre as páginas da aplicação
            $_SESSION['name'] = $usuario->name;

            //armazena email na global SESSION para manter a conecção entre as páginas da aplicação
            $_SESSION['email'] = $usuario->email;

            //para criar lista com o id do usuário ativo
            $_SESSION['id'] = $usuario->id;
            
            //redireciona para página home da aplicação
            return redirect()->route('home.index');
        }else{
            //redireciona para página de login caso usuário e senha não exista
            return redirect()->route('site.login', ['erro' => 1]);
        }

    }

    public function sair(){
        //encerra a sessão.
        session_destroy();

        //redireciona à página principal.
        return redirect()->route('site.principal');
    }
}
