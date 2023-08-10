@extends('template')
	
@section('titulo', 'Motuber | Corrida')

@push('css')
	<link rel="stylesheet" href="{{asset('assets/corrida.css')}}">
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

<div class="formulario">
<form action="{{route('cadastrarCorrida')}}" method="POST">
    @csrf
    <fieldset>
        <legend>Informe aqui os dados da corrida</legend>
        <input type="text" name="localDePartida" placeholder="Local de Partida" value="{{old('localDePartida')}}"/><br>
        <input type="text" name="localDeDestino" placeholder="Local de Destino" value="{{old('localDeDestino')}}"/><br>     
        <input type="text" name="Motorista" placeholder="Motorista(Opcional)" value="{{old('Motorista')}}"/><br>
        <label>Forma de Pagamento:</label><br><br>
        <select name="formaDePagamento" id="pagamentos">
            <option value="Cartão De Crédito">Cartão de Crédito</option>
            <option value="Cartão De Débito">Cartão de Débito</option>
            <option value="Boleto">Boleto</option>
        </select><br>
        <input id="btn-enviar" type="submit" value="Solicitar"><br>
    </fieldset>
</form>
</div><br><br>
@endsection