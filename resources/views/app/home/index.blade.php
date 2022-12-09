@extends('app.layouts.basico')

@section('conteudo')

<div id='corpo-home'>
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

    <div class="title-page"> Minhas listas</div>

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

    <!--<div>
        <table border='1' width='100%'>
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
                    <td>
                        @if ($lista->imagem)
                        <img src="{{ url("storage/img/listas/$lista->imagem") }}" alt='' width='30px' height='30px'>
                        @endif

                    </td>
                    <td>{{ $lista->nome }}</td>
                    <td><a href="{{ route('lista.show', ['lista' => $lista->id]) }}">Visualizar</a></td>

                    @if ($lista->user_id == $_SESSION['id'] || count($listaUsuarios->where('lista_id',
                    $lista->id)->where('user_id', $_SESSION['id'])) != 0)
                    <td>Já incluso em Minhas Listas</td>
                    @else
                    <td><a href="{{ route('lista-usuario.store', ['lista' => $lista->id]) }}">Incluir em Minhas
                            Listas</a>
                    </td>
                    @endif
                </tr>

                @endforeach
            </tbody>

        </table>

        <p>timezone_offset_get</p>
    </div>-->



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

</div>
{{ $listas->links() }}
@endsection
