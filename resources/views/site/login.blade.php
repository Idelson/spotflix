@extends('site.layouts.basico')

@section('titulo', $titulo)

@section('conteudo')

    <div class='div_formulario'>

    <div id='cad_usuario'>Spotflix</div>
    <p id='sub-title'>Para continuar faça login no seu Spotflix.</p>
        <form action={{ route('site.login') }} method="post" ><!--//caso não funcione, csrf_field(), entre 2 chaves-->
            @csrf

            <div id='form-input'>
            <label>Usuário</label>
            <input name='usuario' value='{{ old('usuario') }}' type='text' class='input_form_login'>
            {{ $errors->has('usuario') ? $errors->first('usuario') : '' }}
            </div>

            <div id='form-input'>
            <label>Senha</label>
            <input name='senha' value='{{-- old('senha') --}}' type='password' class='input_form_login'>
            {{ $errors->has('senha') ? $errors->first('senha') : '' }}
            </div>
            <button type='submit' class='bot'>Acessar</button>
        </form>
        {{ isset($erro) && $erro != "" ? $erro : '' }}
        <a id='btn-line' href='{{route('site.principal')}}'>Voltar</a>
    </div>

@endsection
