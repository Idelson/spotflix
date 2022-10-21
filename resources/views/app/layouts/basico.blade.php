<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Spotflix - @yield('titulo')</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{asset('css/estilo_basico.css')}}">
    </head>

    <body>

        <div id=>@include('app.layouts._partials.menu')</div>
        @yield('conteudo')
        
    </body>
</html>