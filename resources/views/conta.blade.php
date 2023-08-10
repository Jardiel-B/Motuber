@extends('template')
	
@section('titulo', 'Motuber | Conta')

@push('css')
	<link rel="stylesheet" href="{{asset('assets/conta.css')}}">
@endpush

@section('conteudo_principal')
<div class="info">
    <fieldset>
        <legend>Informações da Conta</legend>
        <label>Nome:</label>
        <p>{{$dados->nome}}</p>
        <label>Email:</label>
        <p>{{$dados->email}}</p>
        <label>Data de nascimento:</label> 
        <p>{{$dados->data_de_nascimento}}</p>
        <label>CPF:</label>
        <p>{{$dados->CPF}}</p>
        <label>Telefone:</label>
        <p>{{$dados->telefone}}</p>
        <label>CEP:</label>
        <p>{{$dados->CEP}}</p>
        <button id="btn-editar"><a href="{{route('edicao')}}">Editar</a></button><br>
        <button id="btn-deletar"><a href="{{route('deletarConta')}}">Excluir</a></button>
    </fieldset>
</div><br>

<a href="{{route('listarCorridas')}}"><button>Histórico de corridas</button></a><br><br>
@endsection