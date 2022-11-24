@extends('app.layouts.basico')

@section('titulo', 'Visualização')

@section('conteudo')

<div id="cadastro-lista">
        <h4>Detalhes da Lista</h4>
        <p>Nome da Lista: <strong>{{$lista->nome}}</strong></p>
    </div>
    
    <p><a href="{{ route('lista.index') }}">Voltar</a></p>
    




@endsection