@extends('template')
	
@section('titulo', 'Motuber | Sobre')

@push('css')
	<link rel="stylesheet" href="{{asset('assets/sobre.css')}}">
@endpush

@section('conteudo_principal')
<div class="info">
    <h2>Conheça o MotUber</h2>
    <p class="info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;O MotUber foi criado durante a pandemia, no ano de 2022, e veio para atender as necessidades de quem quer ser
        rápido e pratico para chegar no lugar que deseja, o fato dos nossos veículos serem motos agiliza o seu tempo da corrida em 
        cerca de 40%, e não precisa ficar com o pé atrás em andar de moto, todos os motoristas parceiros do MotUber passam por 
        uma avaliação rigorosa e minunciosa
    </p>
    <p class="info">&nbsp;&nbsp;&nbsp;&nbsp;Nós oferecemos a mais fácil e intuitiva interface possível, você nem vai precisar utilizar nosso suporte
        24/7 com garantia de tempo de resposta média de no máximo 5 minutos que nunca te deixa na mão
    </p>
    <h4>Para você passageiro</h4>
    <p class="info">&nbsp;&nbsp;&nbsp;&nbsp;Para os passageiros garantimos velocidade e segurança na hora de viajar, saiba que todas as corridas, trajetos
        e participantes das corridas são salvos, pois, caso haja algum problema poderemos oferecer suporte o máximo possivel, e se 
        você sentir que está em perigo ou que está em uma emergência temos o atalho que você pode clicar e enviar uma mensagem
        pré-definida com sua localização e informações da corrida para um número de sua escolha. Você, Além de solicitar suas corridas pode agendá-las 
        e deixá-las visível para que os motoristas possam aceitá-la  
    </p>
    <h4>Para você motorista</h4>
    <p class="info">&nbsp;&nbsp;&nbsp;&nbsp;E para você que deseja se juntar a nós como um motorista parceiro saiba que temos uma das menores taxas desse 
        mercado garantindo a você o lucro que merece e se você não estiver recebendo muitas corridas não se preocupe, temos um sistema de balanceamento para 
        corrigir isso. Além desse sistema você também pode aproveitar e confirmar algumas corridas agendadas e fazer aquela graninha extra quando precisar
    </p>
</div><br><br>
@endsection