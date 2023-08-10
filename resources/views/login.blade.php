<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logar</title>
    <link href="{{asset('assets/login.css')}}" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" type="imagex/png" href="../imagens/MotUbericon.ico">
</head>
<body>
    <header>
        <div class="cabeça">
            <h1>&nbsp;&nbsp;Hora de Logar no MotUber</h1>
        </div>
    </header>

    <!--Verifica erros no cadastro-->
    @if ($errors->any())
    <div class="erros"> 
           <strong>Erro!</strong>
            @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
     @endif

    <form action="{{route("logar")}}" method="post">
        @csrf
        <fieldset>
            <legend>Login</legend>
            <input id="email" type="text" name="email" placeholder="Email" value="{{old('email')}}">
            <input id="senha" type="password" name="senha" placeholder="Senha">
            <input id="btn-logar" type="submit" value="Logar"><br>
            <br><a href="{{route("cadastro")}}">Ainda não tenho Cadastro</a>
        </fieldset>
    </form>
<script src="pagina2.js"></script>
</body>
</html>