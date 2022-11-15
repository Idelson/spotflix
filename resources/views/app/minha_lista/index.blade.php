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

            @foreach ($minhaListas as $minhaLista)

                <tr>
                    <td>{{ $minhaLista->imagem }}</td>
                    <td>{{ $minhaLista->nome }}</td>
                </tr>
                
            @endforeach
            
        </tbody>
    
    </table>
@endsection