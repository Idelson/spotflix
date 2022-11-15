@extends('app.layouts.basico')

@section('titulo', 'Criar Lista')

@section('conteudo')
    
    <div id="cadastro-lista">

        <form method="post" action="{{ route('minha-lista.store') }}">
            @csrf
            <input class="forms" name="nome" placeholder="Nome da Lista"><br><br>
            <input class="forms" name="imagem" placeholder="Selecione a imagem"><br><br>

            <button type='submit' >Cadastrar</button>
        </form>
    
    </div>



@endsection