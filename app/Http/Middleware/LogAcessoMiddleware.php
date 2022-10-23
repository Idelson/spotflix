<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\LogAcesso;

class LogAcessoMiddleware
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
        //retorna o ip do request e guarda na variável
        $ip = $request->server->get('REMOTE_ADDR');

        //armazena na variável a URI acessada
        $rota = $request->getRequestUri();

        //grava no banco de dados
        LogAcesso::create(['log'=>"IP $ip requisitou a rota $rota."]);

        //retorna a requisição e envia para a aplicação ou para middleware de autenticação, conforme o caso
        return $next($request);
        

    }
}
