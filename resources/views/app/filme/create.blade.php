@extends('app.layouts.basico')

@section('titulo', $titulo)

@section('conteudo')
    
    <div id="cadastro-filme">

        <form method="post" action="#">
            @csrf
            <input classe="forms" name="titulo" placeholder="Título do Filme"><br>
            <input classe="forms" name="ano" placeholder="Ano"><br>
            <input classe="forms" name="duracao" placeholder="Duração"><br>
            <input classe="forms" name="imagem" placeholder="Imagem"><br>

            <select name="classificacoe_id">
                @foreach ($classificacoes as $classificacoe)
                    <option name="option" value="1">{{ $classificacoe->descricao }}</option>
                @endforeach
                
            </select>         
        </form>
    
    </div>

@endsection