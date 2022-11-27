@extends('app.layouts.basico')

@section('titulo', 'Home')

@section('conteudo')

    
    <div id="pesquisa-lista">

        <form method="get" action="{{ route('home.show') }}">
            @csrf
            <input class="forms" name="nome" placeholder="Nome da Lista">
            <button type='submit' >Cadastrar</button>
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
                    <td>{{ $lista->nome }}</td>
                    <td><a href="{{ route('lista.show', ['lista' => $lista->id]) }}">Visualizar</a></td>
                    @if ($lista->user_id == $_SESSION['id'])
                        <td>Já incluso em Minhas Listas</td>
                    @else
                        <td><a href="">Incluir em Minhas Listas</a></td>
                    @endif

                </tr>
                
            @endforeach
            
        </tbody>
    
    </table>
@endsection