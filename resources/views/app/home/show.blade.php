@extends('app.layouts.basico')

@section('conteudo')


<div id="pesquisa-lista">

<form id='form-pesquisa' method="get" action="{{ route('home.show') }}">
    @csrf
    <input class="input-forms" name="nome" placeholder="Nome da Lista">
    <button class="btn-lupa" type='submit'>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search"
            viewBox="0 0 16 16">
            <path
                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
        </svg>
    </button>
</form>

</div>

    <div class="title-page"> Resultado da pesquisa</div>

    <div class="grid">
        @foreach ($listas as $lista)
        <a href="{{ route('lista.show', ['lista' => $lista->id]) }}">
        <div class="card-film">
            @if ($lista->imagem)
            <img src='/img/img-padrao.png' alt='' class="img">
            @endif

            <p class="nome-lista">{{ $lista->nome }}</p>
        </div>
        </a>
        @endforeach
    </div>

    <!--<table border='1' width='100%'>
        <thead>
            <tr>
                <th>Imagem</th>
                <th>Nome</th>
                <th colspan='2'>Ação</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($listas as $lista)
                <tr>
                    <td>{{ $lista->imagem }}</td>
                    <td><strong>{{ $lista->nome }}</strong></td>
                    <td><a href="{{ route('lista.show', ['lista' => $lista->id]) }}">Visualizar</a></td>
                    @if ($lista->user_id == $_SESSION['id'])
                        <td>Já incluso em Minhas Listas</td>
                    @else
                        <td><a href="{{ route('lista-usuario.store', ['lista' => $lista->id]) }}">Incluir em Minhas Listas</a></td>
                    @endif
                </tr>

                <tr >
                    <td colspan='4' >
                        <table border='1' >
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
                    </td>
                </tr>
            @endforeach

        </tbody>

    </table>-->
@endsection
