@extends('app.layouts.basico')

@section('titulo', $titulo)

@section('conteudo')
    
    <div id="cadastro-filme">

        <form method="post" action="{{ route('filme.store') }}">
            @csrf
            <input class="forms" name="titulo" placeholder="Título do Filme"><br><br>
            <input class="forms" name="ano" placeholder="Ano"><br><br>
            <input class="forms" name="duracao" placeholder="Duração"><br><br>
            <input class="forms" name="imagem" placeholder="Imagem"><br><br>

            <select name="classificacoe_id" class="select">
                <option>-- Selecione a Classificação --</option>
                @foreach ($classificacoes as $classificacao)
                    <option name="option" value="{{ $classificacao->id }}">{{ $classificacao->descricao }}</option>
                @endforeach
                
            </select>  

            <button type='submit' >Cadastrar</button>
        </form>
    
    </div>



@endsection