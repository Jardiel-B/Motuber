@extends('template')
	
@section('titulo', 'Motuber | Editar Conta')

@push('css')
	<link rel="stylesheet" href="{{asset('assets/editarConta.css')}}">
@endpush

@section('conteudo_principal')
<!--Verifica erros no cadastro-->
@if ($errors->any())
<div class="erros"> 
       <strong>Erro!</strong>
        @foreach ($errors->all() as $error)
        <p>{{ $error }}</p>
    @endforeach
</div>
 @endif
<br><br>
<form action="{{route('editarConta')}}" method="post">
    @csrf
    <fieldset>
        <legend>Editar Informações de Conta</legend>
        <input type="text" name="nome" placeholder="Nome completo" value="{{$dados->nome}}"/>
        <input type="text" name="email" placeholder="Email" value="{{$dados->email}}"/>      
        <input type="password" name="senha" placeholder="Senha" value="{{$dados->senha}}"/> 
        <input type="date" name="data_de_nascimento" value="{{$dados->data_de_nascimento}}"/>
        <input type="text" name="cpf" placeholder="CPF: 000.000.000-00" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" value="{{$dados->CPF}}"/>
        <input type="tel" name="telefone" placeholder="Tel: (00) 90000-0000" pattern="(\(\d{2}\)\s)?(\d{4,5}\-\d{4})" value="{{$dados->telefone}}"/>
        <input type="text" name="cep" placeholder=" CEP: 00000-000" pattern="(\d{5}-\d{3})" value="{{$dados->CEP}}"/>
        <input id="btn-editar" type="submit" value="Editar"><br>
    </fieldset>
</form><br><br>
@endsection