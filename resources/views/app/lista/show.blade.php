@extends('app.layouts.basico')

@section('titulo', 'Visualiza Lista')

@section('conteudo')

<div id="cabecalho-visu">
    <img src='/img/img-padrao.png' alt='' class="img-visializacao">

    <div class="div-edit">
        <p id='texto-visu'>{{"$lista->nome"}}</p>
        @if($lista->user_id == $_SESSION['id'])
        <a class="link-edit" href="{{ route('lista.edit', ['lista' => $lista->id]) }}">Editar lista</a>
        @endif
    </div>

</div>
@foreach ($lista->filmes as $filme)
<div class="lista-completa">
    <div class="titulo"> {{ $filme->titulo }}</div>
    <div class="ano">Ano: {{ $filme->ano }}</div>
    <div class="duracao ">Duração: {{ $filme->duracao }}</div>
</div>
@endforeach
<div>
    <!--<a id='icone-flutuante' href="{{ route('lista-filme.create', ['lista' => $lista->id]) }}">-->

    @if($lista->user_id == $_SESSION['id'])
    <!--Botão de adicionar filmes-->
    <a id='icone-flutuante' href="{{ route('lista-filme.create', ['lista' => $lista->id]) }}">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
            class="bi bi-plus-square-fill" viewBox="0 0 16 16">
            <path
                d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z" />
        </svg>
    </a>
    @else
    <!--Botão de adicionar à minhas listas-->
    <a id='icone-flutuante' href="{{ route('lista-usuario.store', ['lista' => $lista->id]) }}">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bookmark-heart"
            viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M8 4.41c1.387-1.425 4.854 1.07 0 4.277C3.146 5.48 6.613 2.986 8 4.412z" />
            <path
                d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z" />
        </svg>
    </a>
    @endif
</div>



<!--<div>
    <table border='1'>
        <thead>
            <tr>
                <th>Título</th>
                <th>Ano</th>
                <th>Duração</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($lista->filmes as $filme)
            <tr>
                <td>{{ $filme->titulo }}</td>
                <td>{{ $filme->ano }}</td>
                <td>{{ $filme->duracao }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>-->




@endsection
