@extends('app.layouts.basico')

@section('titulo', 'Criar Lista')

@section('conteudo')


<div id="cabecalho-padrao-criar-lista">
<p id='texto-cabe'>Não perca tempo {{$_SESSION['name']}}, <br> mostre seus gostos para o mundo.</p>

</div>

<div id="cadastro-lista">

    <form method="post" action="{{ route('lista.store') }}" enctype='multipart/form-data'>
        @csrf
        <div class="form-criate">
            <div class="form01">
                <label>Nome da sua lista</label>
                <input class="input-forms" name="nome" placeholder="Nome da Lista">
            </div>
            <div class="form01">
                <label for="imagem">Imagem da Lista:</label>
                <input class="arquivo" type='file' id='imagem' name="imagem">
            </div>
            <div class="botao-cadastrar">
                <button id='btn-cadastro' type='submit'>Cadastrar</button>
            </div>
    </form>

</div>
</div>



@endsection
