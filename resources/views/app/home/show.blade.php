@extends('app.layouts.basico')

@section('titulo', 'Home')

@section('conteudo')


    <div id="pesquisa-lista">

        <form method="get" action="{{ route('home.show') }}">
            @csrf
            <input class="input-forms" name="nome" placeholder="Nome da Lista">
            <button type='submit' >Pesquisar</button>
        </form>

    </div><br><br>

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

    </table>
@endsection
