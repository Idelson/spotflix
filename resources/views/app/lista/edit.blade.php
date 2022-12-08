@extends('app.layouts.basico')

@section('titulo', 'Minhas Listas')

@section('conteudo')

    <p><a href="{{ route('lista.index') }}">Voltar</a></p>

    <div id="cadastro-lista">
        <form method="post" action="{{ route('lista.update',['lista'=>$lista->id]) }}" enctype='multipart/form-data'>
            @method('PUT')
            @csrf
            <input class="forms" name="nome" value='{{ $lista->nome }}' placeholder="Nome da Lista"><br><br>
            <input class="forms" name="imagem" value='{{-- $lista->imagem --}}' type="file"><br><br>

            <button type='submit' >Editar</button>
        </form>
    </div>

@endsection