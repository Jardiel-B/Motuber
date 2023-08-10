<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="{{asset('assets/cadastro.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <script src="pagina2.js"></script>
    <link rel="shortcut icon" type="imagex/png" href="../imagens/MotUbericon.ico">
</head>
<body>
    <header>
        <h1>&nbsp;&nbsp;Bem-Vindo ao MotUber</h1>
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

    <img id="logo" src="./imagens/motuber.png" alt="">
    <form action="{{route("cadastrar")}}" method="post">
        @csrf
        <fieldset>
            <legend>Cadastro</legend>
            <input type="text" name="nome" placeholder="Nome completo" value="{{old('nome')}}"/>
            <input type="text" name="email" placeholder="Email" autocomplete="off" value="{{old('email')}}"/>      
            <input type="password" name="senha" placeholder="Senha" value="{{old('senha')}}"/> 
            <input type="date" name="data_de_nascimento" value="{{old('data_de_nascimento')}}"/>
            <input type="text" name="cpf" placeholder="CPF: 000.000.000-00" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" autocomplete="off" value="{{old('cpf')}}"/>
            <input type="tel" name="telefone" placeholder="Tel: (00) 90000-0000" pattern="(\(\d{2}\)\s)?(\d{4,5}\-\d{4})" value="{{old('telefone')}}"/>
            <input type="text" name="cep" placeholder=" CEP: 00000-000" pattern="(\d{5}-\d{3})" value="{{old('cep')}}"/>
            <input id="btn-enviar" type="submit" value="Cadastrar"><br>
            <br><a href="{{route("login")}}">Já sou cadastrado</a>
        </fieldset>
    </form>
</body>
</html>