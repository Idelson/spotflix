@extends('app.layouts.basico')

@section('titulo', 'Lista e Filmes')

@section('conteudo')
    
    <div id="cadastro-lista">
        <h4>Detalhes da Lista</h4>
        <p>Nome da Lista: <strong>{{$lista->nome}}</strong></p>
    </div>
    
    <p><a href="{{ route('lista.index') }}">Voltar</a></p>
    <div>
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
                        <td><a href="">Excluir</a></td>
                    </tr>
                @endforeach              
            </tbody>
        </table>
    </div><br>
    
    <div>
        <form method="post" action="{{ route('app.lista-filme.store', ['lista'=>$lista->id]) }}">
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
@endsection