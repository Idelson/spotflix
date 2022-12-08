@extends('app.layouts.basico')

@section('titulo', 'Minhas Listas')

@section('conteudo')
    
    <div class='div-listas-importadas'>
        <h3>Listas Importadas</h3>
        <table border='1' class='listas-importadas'>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Autor</th>
                    <th colspan='2'>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($listaUsuarios as $listaUsuario)
                    <tr>
                        <td>{{$listaUsuario->lista->nome}}</td>
                        <td>{{$listaUsuario->lista->user->name}}</td>
                        <td><a href="{{ route('lista-filme.show', ['lista' => $listaUsuario->lista->id]) }}">Visualizar</a></td>
                        <td><a href="{{ route('lista-usuario.destroy', ['listaUsuario' => $listaUsuario->id]) }}">Excluir</a></td>
                    </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
    

    <div class='div-minhas-listas'>
        <h3>Minhas Listas</h3>
        
        <table border='1' class='minhas-listas'>
        
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
                        <td>
                            @if ($lista->imagem)
                                <img src='{{ url("img/listas/$lista->imagem") }}' alt='' width='30px'>
                            @endif
                        </td>
                        <td>{{ $lista->nome }}</td>
                        <td><a href="{{ route('lista-filme.show', ['lista' => $lista->id]) }}">Visualizar</a></td>
                        <td><a href="{{ route('lista-filme.create', ['lista' => $lista->id]) }}">Adicionar Filme</a></td>
                        <td><a href="{{ route('lista.edit', ['lista' => $lista->id]) }}">Editar</a></td>
                        <td><a href="{{ route('lista.destroy', ['lista' => $lista->id]) }}">Excluir</a></td>
                    </tr>
        
                @endforeach
        
            </tbody>
        
        </table>
    </div>

@endsection