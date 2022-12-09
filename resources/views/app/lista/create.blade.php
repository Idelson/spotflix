@extends('app.layouts.basico')

@section('titulo', 'Criar Lista')

@section('conteudo')
    
    <div id="cadastro-lista">

        <form method="post" action="{{ route('lista.store') }}" enctype='multipart/form-data'>
            @csrf
            <input class="input-forms" name="nome" placeholder="Nome da Lista"><br><br>
            <label for="imagem">Imagem da Lista:</label>
            <input class="input-forms" type='file' id='imagem' name="imagem"><br><br>

            <button type='submit' >Cadastrar</button>
        </form>
    
    </div>



@endsection