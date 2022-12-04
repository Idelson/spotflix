@extends('site.layouts.basico')

@section('titulo', $titulo)

@section('conteudo')
    <br>
    <div id='div-conteudo-pagina-principal'>
        
        <h1>Página principal</h1>
        <a href={{ route('site.login') }}>Login</a>
        <a href={{ route('site.cadastro') }}>Cadastre-se</a><br><br><br>
        <img src='img/imagemHome.jpg' class='img_primaria'>

    </div>

@endsection