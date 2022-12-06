@extends('app.layouts.basico')

@section('titulo', $titulo)

@section('conteudo')
    
    <table id='filme_todos'>
        <a id='link-novo' href="{{ route('filme.create') }}">Novo Filme</a>
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
                    <td class='dados'>{{ $filme->classificacao->descricao == 'Livre' ? $filme->classificacao->descricao : $filme->classificacao->descricao." anos"}}</td>
                    <td class='dados'><a href="{{route('filme.destroy', ['filme'=>$filme->id])}}">Excluir</a></td>
                    <td class='dados'><a href="#">Editar</a></td>
                </tr>

            @endforeach
    
        </tbody>


    </table>
@endsection