<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Spotflix - @yield('titulo')</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{asset('css/estilo_basico.css')}}">
    </head>

    <body>
        <div id="total">

        <div id="nav">@include('app.layouts._partials.menu')</div>
            
            <div id="div-conteudo">
                <div id="div-titulo">@yield('titulo')</div>
                <div id="div-resultados">
                    @yield('conteudo')
                </div>
            </div>

        </div>

    </body>
</html>