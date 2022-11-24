@extends('app.layouts.basico')

@section('titulo', 'Home')

@section('conteudo')
    <table border='1' width='100%'>

        <thead>

            <tr>
                <th>Imagem</th>
                <th>Nome</th>
                <th>Ação</th>
            </tr>

        </thead>
        <tbody>

            @foreach ($listas as $lista)

                <tr>
                    <td>{{ $lista->imagem }}</td>
                    <td>{{ $lista->nome }}</td>
                    <td><a href="{{ route('lista.show', ['lista' => $lista->id]) }}">Visualizar</a></td>
                </tr>
                
            @endforeach
            
        </tbody>
    
    </table>
@endsection