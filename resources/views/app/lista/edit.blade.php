@extends('app.layouts.basico')

@section('titulo', 'Minhas Listas')

@section('conteudo')

    <div id="cadastro-lista">
        <form method="post" action="{{ route('lista.update',['lista'=>$lista->id]) }}" enctype='multipart/form-data'>
            @method('PUT')
            @csrf
            <input class="input-forms edit-input" name="nome" value='{{ $lista->nome }}' placeholder="Nome da Lista"><br>
            <!--input class="forms" name="imagem" value='{{-- $lista->imagem --}}' type="file"-->

            <button id='btn-cadastro' type='submit'>Salvar</button>
        </form>
    </div>

@endsection
