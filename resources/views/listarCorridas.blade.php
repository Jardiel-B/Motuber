@extends('template')
	
@section('titulo', 'Motuber | Lista de Corridas')

@push('css')
	<link rel="stylesheet" href="{{asset('assets/listarCorridas.css')}}">
@endpush

@section('conteudo_principal')
<div class="buscar">
    <form action="{{route('buscarCorridas')}}" method="POST">
        @csrf
        <table>
            <tr>
                <td><label>Local De Partida:</label></td>
                <td><input type="text" placeholder="Local De Partida" name="localDePartida"></td>
            </tr>
        </table>
        <input id="btn-buscar" type="submit" value="buscar">
    </form>
</div>
<div class="corridas">
    <table>
        <tr>
            <td class="colunas">Local de Partida</td>
            <td class="colunas">Local de Destino</td>
            <td class="colunas">Forma de Pagamento</td>
            <td class="colunas">Motorista</td>
        </tr>
@foreach ($corridas as $corrida)
        <tr>
            <td>{{$corrida['localDePartida']}}</td>
            <td>{{$corrida['localDeDestino']}}</td>
            <td>{{$corrida['formaDePagamento']}}</td>
            <td>{{$corrida['Motorista']}}</td>
        </tr>
@endforeach
    </table>
</div><br><br>
@endsection