@extends('app.layouts.basico')

@section('conteudo')


    <div id="pesquisa-lista">

        <form method="get" action="{{ route('home.show') }}">
            @csrf
            <input class="input-forms" name="nome" placeholder="Nome da Lista">
            <button type='submit' >Pesquisar</button>
        </form>

    </div><br><br>

    <table border='1' width='100%' >

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
                    <td>{{ $lista->nome }}</td>
                    <td><a href="{{ route('lista.show', ['lista' => $lista->id]) }}">Visualizar</a></td>

                    @if ($lista->user_id == $_SESSION['id'] || count($listaUsuarios->where('lista_id', $lista->id)->where('user_id', $_SESSION['id'])) != 0)
                        <td>Já incluso em Minhas Listas</td>
                    @else
                        <td><a href="{{ route('lista-usuario.store', ['lista' => $lista->id]) }}">Incluir em Minhas Listas</a></td>
                    @endif
                </tr>

            @endforeach
        </tbody>

    </table>
    {{ $listas->links() }}
@endsection
