<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('titulo')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="imagex/png" href="../imagens/MotUbericon.ico">
    @stack('css')
</head>
<body>

	<!-- BARRA DE NAVEGAÇÃO -->
	<header>
        <nav class="navbar">
            <img id="motubericon" src="../imagens/motuberBR.png">
            <a href="{{route("home")}}">HOME</a>
            <a href="{{route("download")}}">DOWNLOAD</a>
            <a href="{{route("sobre")}}">SOBRE</a>
            <a href="{{route("parceria")}}">PARCERIA</a>
            <a href="{{route("corrida")}}">SOLICITAR CORRIDA</a>
            <a id="sair" href="{{route("logout")}}">SAIR</a>
            <a href="{{route("conta")}}"><img id="contaicon" src="../imagens/contaicon.png" alt=""></a>
            <h3>{{session('email')}}</h3>
        </nav>
    </header>
	<!-- FIM BARRA DE NAVEGAÇÃO -->
	
	<div class="container">
	<!-- CONTEUDO PRINCIPAL [INICIO] -->
    @yield('conteudo_principal')
    <!-- CONTEUDO PRINCIPAL [FIM] -->
	</div>
	
    <!-- COMEÇO FOOTER -->
    <footer>
        <div class="contatoR">
            <h3>Redes Sociais</h3>
            <p>Twitter: @MotUber</p>
            <p>Instagram: @MotUber</p>
            <p>Página no Facebook: MotUber</p>
        </div>
        <div class="contatoT">
            <h3>Telefone</h3>
            <p>Whatsapp: (11) 99999-9999</p>
            <p>Telefone 1: (11) 98888-8888</p>
            <p>Telefone 2: (11) 97777-7777</p>
        </div>
        <div class="contatoE">
            <h3>Emails</h3>
            <p>MotUber@gmail.com</p>
            <p>CentralMotUber@gmai.com</p>
            <p>SuporteMotUber@gmail.com</p>
        </div>
    </footer>
    <!-- FIM FOOTER -->

    <!-- CHATBOT -->
    <script src="https://unpkg.com/blip-chat-widget" type="text/javascript">
    </script>
    <script>
        (function () {
            window.onload = function () {
                new BlipChat()
                .withAppKey('bW90dWJlcnN1cHBvcnQ6MTRhMmE5ODctZTg2Mi00Yjk0LTkxOGQtOTU3OTQxODE2Njgx')
                .withButton({"color":"#2CC3D5","icon":""})
                .withCustomCommonUrl('https://jardiel-bernardino-n2g0s.chat.blip.ai/')
                .build();
            }
        })();
    </script>
    <!-- FIM CHATBOT -->

</body>
</html>