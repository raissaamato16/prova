<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar</title>
</head>
<body>
<h1>Listar</h1>
    <br>
   
        <label for="nome">Nome</label>
        <input type="text" name="nome" value="{{ $usuario->nome }}">
        <br><br>
        <label for="endereco">Endereço</label>
        <input type="text" name="endereco" id="endereco" value="{{ $usuario->endereco }}">
        <br><br>
        <label for="bairro">Bairro:</label>
        <input type="text" name="bairro" id="bairro" value="{{ $usuario->bairro }}">
        <br><br>
        <label for="cep">Cep</label>
        <input type="text" name="cep" id="cep" value="{{ $usuario->cep }}">
        <br><br>
        <label for="cidade">Cidade:</label>
        <input type="text" name="cidade" id="cidade" value="{{ $usuario->cidade }}">
        <br><br>
        <label for="estado">Estado</label>
        <input type="text" name="estado" id="estado" value="{{ $usuario->estado }}">
<br><br>

</body>
</html>