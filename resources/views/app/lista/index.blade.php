@extends('app.layouts.basico')

@section('titulo', 'Minhas Listas')

@section('conteudo')
    <div class='listas'>
        <h3>Minhas Listas</h3>
        
        <table border='1' width='80%'>
        
            <thead>
                <tr>
                    <th>Imagem</th>
                    <th>Nome</th>
                    <th colspan='4'>Ações</th>

                </tr>
            </thead>
            <tbody>
            
                @foreach ($listas as $lista)
                    <tr>
                        <td>{{ $lista->imagem }}</td>
                        <td>{{ $lista->nome }}</td>
                        <td><a href="{{ route('lista-filme.show', ['lista' => $lista->id]) }}">Visualizar</a></td>
                        <td><a href="{{ route('lista-filme.create', ['lista' => $lista->id]) }}">Adicionar Filme</a></td>
                        <td><a href="{{ route('lista.edit', ['lista' => $lista->id]) }}">Editar</a></td>
                        <td><a href="">Excluir</a></td>
                    </tr>
        
                @endforeach
        
            </tbody>
        
        </table>
    </div>

@endsection