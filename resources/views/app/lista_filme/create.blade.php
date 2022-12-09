@extends('app.layouts.basico')

@section('conteudo')

<div id="cabecalho-visu">
    <img src='/img/img-padrao.png' alt='' class="img-visializacao">
    <p id='texto-visu'>{{"$lista->nome"}}</p>
</div>

<div>
    <form method="post" action="{{ route('lista-filme.store', ['lista'=>$lista->id]) }}">
        @csrf
        <select name='filme_id'>
            <option>--Selecione o Filme--</option>
            @foreach ($filmes as $filme)
            <option value='{{ $filme->id }} '>{{ $filme->titulo }}</option>
            @endforeach
        </select>

        <button type="submit" id='bt'>Incluir Filme</button>
    </form>
</div>


<div class="add-filme">
    @foreach ($lista->filmes as $filme)
    <div class="lista-completa">
        <div class="titulo">{{ $filme->titulo }}</div>
        <div class="ano">Ano: {{ $filme->ano }}</div>
        <div class="duracao ">Duração: {{ $filme->duracao }}</div>

    </div>

    <form class="apagar" id='form_{{$filme->pivot->id}}' method='post'
        action="{{ route('lista-filme.destroy', ['listaFilme'=>$filme->pivot->id, 'lista_id'=>$lista->id])}}">
        @method('DELETE')
        @csrf
        <a class="apagar" href="#" onclick="document.getElementById('form_{{$filme->pivot->id}}').submit()">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash"
                viewBox="0 0 16 16">
                <path
                    d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                <path fill-rule="evenodd"
                    d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
            </svg>
        </a>
    </form>
    @endforeach
</div>

<!--<div>
    <table border='1'>
        <thead>
            <tr>
                <th>Título</th>
                <th>Ano</th>
                <th>Duração</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($lista->filmes as $filme)
            <tr>
                <td>{{ $filme->titulo }}</td>
                <td>{{ $filme->ano }}</td>
                <td>{{ $filme->duracao }}</td>
                <td>

                    <form id='form_{{$filme->pivot->id}}' method='post'
                        action="{{ route('lista-filme.destroy', ['listaFilme'=>$filme->pivot->id, 'lista_id'=>$lista->id])}}">
                        @method('DELETE')
                        @csrf
                        <a href="#" onclick="document.getElementById('form_{{$filme->pivot->id}}').submit()">Excluir</a>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>-->

@endsection
