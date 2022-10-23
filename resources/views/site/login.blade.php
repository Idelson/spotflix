@extends('site.layouts.basico')

@section('titulo', $titulo)

@section('conteudo')
    <br><br><br><br>
    
    <div class='div_formulario'>
    
    <h1 id='login'>Login</h1>
        <form action={{ route('site.login') }} method="post" ><!--//caso não funcione, csrf_field(), entre 2 chaves-->
            @csrf
            <input name='usuario' value='{{ old('usuario') }}' type='text' placeholder='Usuário' class='input_form_login'><br>
            {{ $errors->has('usuario') ? $errors->first('usuario') : '' }}<br>
            <input name='senha' value='{{-- old('senha') --}}' type='password' placeholder='Senha' class='input_form_login'><br>
            {{ $errors->has('senha') ? $errors->first('senha') : '' }}<br>
            <button type='submit' class='bot'>Acessar</button>
        </form><br>
        {{ isset($erro) && $erro != "" ? $erro : '' }}
    </div>
@endsection