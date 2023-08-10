@extends('template')
	
@section('titulo', 'Motuber | Parceria')

@push('css')
	<link rel="stylesheet" href="{{asset('assets/parceria.css')}}">
@endpush

@section('conteudo_principal')
<div class="info">
    <h2>Torne-se parceiro</h2>
    <p class="info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nós da MotUber oferecemos duas opções para trabalhar conosco:
    </p>
    <h4>Autônoma</h4>
    <p class="info">&nbsp;&nbsp;&nbsp;&nbsp;Essa forma de parceria tem como principal caracteristica a autonomia do motorista onde tudo que ele há de fazer
        depende dele, quais corridas vai aceitar, quando vai aceitar, horário de ronda, etc. Para trabalhar dessa forma basta somente baixar a versão gratuita
        do app, fazer o cadastro e começar a rodar
    </p>
    <h4>Vinculada</h4>
    <p class="info">&nbsp;&nbsp;&nbsp;&nbsp;Esse tipo de parceria contará com um vinculo entre a empresa e o motorista aqui você terá a mesma autonomia que teria
        se fosse autonomo, mas com alguns plus. Para trabalhar dessa forma basta fazer os mesmos passos descritos na seção anterior e depois fazer o
        upgrade para a versão paga do aplicativo, aqui você aparecerá no topo da lista de motoristas disponíveis, será recomendado para corridas com mais freqûencia,
        poderá aceitar mais corridas agendadas, terá um taxa de desconto menor para o aplicativo, entre vários outros benefícios
    </p>
    <h4>Dúvidas</h4>
    <p class="info">&nbsp;&nbsp;&nbsp;&nbsp;Para tirar suas dúvidas utilize qualquer uma das formas de contato informadas no fim da página ou pelo canal de suporte do
        aplicativo
    </p>
</div><br><br>
@endsection