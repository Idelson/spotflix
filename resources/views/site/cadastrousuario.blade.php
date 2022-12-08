@extends('site.layouts.basico')

@section('titulo', $titulo)

@section('conteudo')

    <div class='div_formulario'>

    <div id='cad_usuario'>Spotflix</div>
    <p id='sub-title'>Inscreva-se grátis!</p>
        <form action={{ route('site.cadastro') }} method="post" ><!--//caso não funcione, csrf_field(), entre 2 chaves-->
            @csrf

            <div id='form-input'>
            <label>Usuário</label>
            <input name='name' value='{{ old('name') }}' type='text' class='input_form_login'>
            </div>
            <div id='form-input'>
            <label>Email</label>
            <input name='email' value='{{ old('email') }}' type='email' class='input_form_login'>
            </div>
            <div id='form-input'>
            <label>Senha</label>
            <input name='password' value='{{ old('password') }}' type='password' class='input_form_login'>
            </div>
            <button type='submit' class='bot'>INCREVER-SE</button>

        </form>
        <a id='btn-line' href='{{route('site.principal')}}'>Voltar</a>
    </div>

@endsection
