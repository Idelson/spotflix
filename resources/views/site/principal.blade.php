@extends('site.layouts.basico')

@section('titulo', $titulo)

@section('conteudo')
    <br>

    <h1>Página principal</h1>
    <a href={{ route('site.login') }}>Login</a>
    <a href={{ route('site.cadastro') }}>Cadastre-se</a><br>
    <img src='img/imagemHome.jpg' class='img_primaria'>

@endsection