@extends('app.layouts.basico')

@section('conteudo')

<div id="cabecalho-visu">
    <img src='/img/img-padrao.png' alt='' class="img-visializacao">
    <p id='texto-visu'>{{"$lista->nome"}}</p>
</div>

<div class="lista-completa">
    @foreach ($lista->filmes as $filme)
    <div class="titulo"> {{ $filme->titulo }}</div>
    <div class="ano">Ano: {{ $filme->ano }}</div>
    <div class="duracao ">Duração: {{ $filme->duracao }}</div>
    @endforeach
</div>


<!--<div>
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
</div>-->




@endsection
