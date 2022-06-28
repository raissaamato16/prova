<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
<h1>Ediatar</h1>
    <br>
    <form action="/editar-usuario/{{ $produto-> id }}" method="post">
        @CSRF
        <label for="nome">Nome</label>
        <input type="text" name="nome">
        <br><br>
        <label for="endereco">Endereço</label>
        <input type="text" name="endereco" id="endereco">
        <br><br>
        <label for="bairro">Bairro:</label>
        <input type="text" name="bairro" id="bairro">
        <br><br>
        <label for="cep">Cep</label>
        <input type="text" name="cep" id="cep">
        <br><br>
        <label for="cidade">Cidade:</label>
        <input type="text" name="cidade" id="cidade">
        <br><br>
        <label for="estado">Estado</label>
        <input type="text" name="estado" id="estado">
<br><br>

        <button>Editar</button>
    <form>
</body>
</html>