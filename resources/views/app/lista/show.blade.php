@extends('app.layouts.basico')

@section('titulo', 'Visualização')

@section('conteudo')

<div id="cadastro-lista">
        <h4>Detalhes da Lista</h4>
        <p>Nome da Lista: <strong>{{$lista->nome}}</strong></p>
    </div>
    
    <p><a href="{{ route('app.home') }}">Voltar</a></p>
    <div>
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
    </div>




@endsection