@extends('app.layouts.basico')

@section('titulo', 'Visualiza Lista')

@section('conteudo')

<div id="cabecalho-visu">
    <img src='/img/img-padrao.png' alt='' class="img-visializacao">
    <p id='texto-visu'>{{"$lista->nome"}}</p>
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
        
        <!--Botão de edição da lista-->
        <a id='' href="{{ route('lista.edit', ['lista' => $lista->id]) }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-plus-square-fill" viewBox="0 0 16 16">
                <path
                    d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z" />
            </svg>
        </a>
    @else
        <!--Botão de adicionar à minhas listas-->
        <a id='' href="{{ route('lista-usuario.store', ['lista' => $lista->id]) }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-plus-square-fill" viewBox="0 0 16 16">
                <path
                    d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z" />
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
