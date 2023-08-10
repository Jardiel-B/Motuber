<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MotUber | Download</title>
    <link rel="stylesheet" href="{{asset('assets/download.css')}}">
    <link rel="shortcut icon" type="imagex/png" href="../imagens/MotUbericon.ico">
</head>
<body>
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

    <div class="download">
        <h2>Faça parte do avanço</h2>
        <img src="{{url('assets/celular.png')}}" alt="">
        <p id="intro">Junto do app para computador você tambem pode utilizar a versão mobile no seu celular, é totalmente gratuito
           e você terá no seu PC ou na palma da sua mão a possibilidade de solicitar uma corrida a qualquer momento à um de
           nossos motoristas parceiros.  
        </p>
        <p>Windows 64x </p>
        <button id="btn-download" name="Download">Download</button>
    </div>
</body>
</html>