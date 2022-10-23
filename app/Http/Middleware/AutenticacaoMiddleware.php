<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AutenticacaoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        //starta a sessao
        session_start();
        //verifica se a global nome foi definida e se email é diferente de nulo. 
        if(isset($_SESSION['name']) && $_SESSION['email'] != ''){
            //empurra a requisição para a aplicação
            return $next($request);
        }else{
            //redireciona para o site login e envia o erro 2 como parâmetro
            return redirect()->route('site.login',['erro'=> 2]);
        }
    }
}
