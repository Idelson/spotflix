@extends('app.layouts.basico')

@section('conteudo')

<div id="cabecalho-padrao">
    <p id='texto-cabe'>Olá, essas são todas as suas <br>listfilmes</p>
</div>

<div class="title-page"> Minhas listas</div>

<div class="grid">
    @foreach ($listas as $lista)

    <div class="card-film-lista ">
        @if ($lista->imagem)
        <img src='/img/img-padrao.png' alt='' class="img">
        @endif
        <a href="{{ route('lista.show', ['lista' => $lista->id]) }}">
            <p class="nome-lista-visu">{{ $lista->nome }}</p>
        </a>
        <a class="apagar" href="{{ route('lista.destroy', ['lista' => $lista->id]) }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash"
                viewBox="0 0 16 16">
                <path
                    d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                <path fill-rule="evenodd"
                    d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
            </svg>
        </a>
    </div>
    @endforeach
</div>

<div>
    <a id='icone-flutuante' href="{{ route('lista.create') }}">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square"
            viewBox="0 0 16 16">
            <path
                d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
            <path
                d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
        </svg>
    </a>
</div>

<!--<div class='div-listas-importadas'>
    <h3>Listas Importadas</h3>
    <table border='1' class='listas-importadas'>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Autor</th>
                <th colspan='2'>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($listaUsuarios as $listaUsuario)
            <tr>
                <td>{{$listaUsuario->lista->nome}}</td>
                <td>{{$listaUsuario->lista->user->name}}</td>
                <td><a href="{{ route('lista-filme.show', ['lista' => $listaUsuario->lista->id]) }}">Visualizar</a></td>
                <td><a href="{{ route('lista-usuario.destroy', ['listaUsuario' => $listaUsuario->id]) }}">Excluir</a>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>


<div class='div-minhas-listas'>
    <h3>Minhas Listasddd</h3>

    <table border='1' class='minhas-listas'>

        <thead>
            <tr>
                <th>Imagem</th>
                <th>Nome</th>
                <th colspan='4'>Ações</th>

            </tr>
        </thead>
        <tbody>

            @foreach ($listas as $lista)
            <tr>
                <td>
                    @if ($lista->imagem)
                    <img src='{{ url("storage/img/listas/$lista->imagem") }}' alt='' width='30px' height='30px'>
                    @endif
                </td>
                <td>{{ $lista->nome }}</td>
                <td><a href="{{ route('lista-filme.show', ['lista' => $lista->id]) }}">Visualizar</a></td>
                <td><a href="{{ route('lista-filme.create', ['lista' => $lista->id]) }}">Adicionar Filme</a></td>
                <td><a href="{{ route('lista.edit', ['lista' => $lista->id]) }}">Editar</a></td>
                <td><a href="{{ route('lista.destroy', ['lista' => $lista->id]) }}">Excluir</a></td>
            </tr>

            @endforeach

        </tbody>

    </table>
</div>-->



@endsection
