@extends('site.layouts.basico')

@section('titulo', $titulo)

@section('conteudo')
    <br><br><br><br>
    
    <div class='div_formulario'>
    
    <h1 id='cad_usuario'>Cadastro de Usuário</h1>
        <form action={{ route('site.cadastro') }} method="post" ><!--//caso não funcione, csrf_field(), entre 2 chaves-->
            @csrf
            <input name='name' value='{{ old('name') }}' type='text' placeholder='Usuário' class='input_form_login'><br><br>
            
            <input name='email' value='{{ old('email') }}' type='email' placeholder='Email' class='input_form_login'><br><br>

            <input name='password' value='{{ old('password') }}' type='password' placeholder='Senha' class='input_form_login'><br><br>
            
            <button type='submit' class='bot'>Cadastrar</button>
            
        </form><br>
        <a href='{{route('site.principal')}}'>Voltar</a>
    </div>
    
@endsection