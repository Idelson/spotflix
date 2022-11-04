@extends('app.layouts.basico')

@section('titulo', $titulo)

@section('conteudo')
    
    <table id='filme_todos'>
        
        <thead>
            <tr>
                <th>Titulo</th>
                <th>Ano</th>
                <th>Duracao</th>
                <th>Imagem</th>
                <th>Classificação</th>   
                <th></th>
                <th></th>             
            </tr>
        </thead>

        <tbody>
    
            @foreach ($filmes as $filme)
     
                <tr>
                    <td>{{ $filme->titulo }}</td>
                    <td class='dados'>{{ $filme->ano }}</td>
                    <td class='dados'>{{ $filme->duracao }}</td>
                    <td class='dados'>{{ $filme->imagem }}</td>
                    <td class='dados'>{{ $filme->classificacoe_id }}</td>
                    <td class='dados'><a href="#">Excluir</a></td>
                    <td class='dados'><a href="#">Editar</a></td>
                </tr>

            @endforeach
    
        </tbody>


    </table>
@endsection