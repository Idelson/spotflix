@extends('site.layouts.basico')

@section('titulo', $titulo)

@section('conteudo')

    <div id='corpo'>
        <div id='img-fundo'>
            <div id='div-conteudo-pagina-principal'>
                <div id='titulo'>As melhores recomendações <br>
                    você encontra aqui</div>

                <p id='p'>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>

                <div id='texto-btn'>
                <a id='btn-line' href={{ route('site.cadastro') }}>Novo por aqui? <span id='span'>Cadastre-se</span> </a>
                <a id='btn'href={{ route('site.login') }}>Entrar</a>
                </div>

            </div>
        </div>
    </div>
@endsection
