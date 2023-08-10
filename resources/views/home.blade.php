@extends('template')
	
@section('titulo', 'Motuber | Home')

@push('css')
	<link rel="stylesheet" href="{{asset('assets/home.css')}}">
@endpush

@section('conteudo_principal')
<div class="info">
    <h2>Utilize o MotUber</h2>
    <p class="info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;O MotUber é o novo aplicativo de corridas de motos do mercado, nossa premissa é oferecer um
        serviço de qualidade que esteja a altura do padrão de exigência de nossos clientes
    </p>
    <h4>Passageiro</h4>
    <p class="info">&nbsp;&nbsp;&nbsp;&nbsp;Você que acabou de embarcar nessa jornada, peça uma corrida, sente e aproveite, indique para os amigos, tanto
        aqueles que precisam de velocidade e segurança para chegar onde querem quanto aqueles que querem uma rendinha extra.  
    </p>
    <h4>Motorista</h4>
    <p class="info">&nbsp;&nbsp;&nbsp;&nbsp;Para aqueles que trabalham conosco temos beneficios ótimos que farão você pensar duas vezes em recusar esta ótima
        oportunidade, não perca tempo, suba na garupa, aproveite a viagem profissional e sinta a brisa de renda batendo no seu rosto 
    </p>
</div><br><br>
@endsection