@extends('app.layouts.basico')

@section('titulo', 'Minhas Listas')

@section('conteudo')
    <table id='minhas-listas'>

        <thead>

            <tr>
                <th>Imagem</th>
                <th>Nome</th>
            </tr>

        </thead>
        <tbody>

            @foreach ($listas as $lista)

                <tr>
                    <td>{{ $lista->imagem }}</td>
                    <td>{{ $lista->nome }}</td>
                </tr>
                
            @endforeach
            
        </tbody>
    
    </table>
@endsection