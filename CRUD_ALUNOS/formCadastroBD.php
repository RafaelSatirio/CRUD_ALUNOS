<?php
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <h3> Formulário de Cadastro para o BD</h3>
    <form action="cadastroEnviadoAoBD.php" method="POST" >
        Digite seu RGM :
        <input type="numeric" name="rgm" required> <br>
        Digite Seu nome :
        <input type="text" name="nome"> <br>
        Digite seu Telefone :
        <input type="numeric" name="telefone"> <br>
        Digite se você é gay :
        <input type="numeric" name="telefone"> <br>
        Digite seu sexo :
        <input type="text" name="sexo"> <br><br>
        <input type="submit" value="Salvar"> &nbsp
        <input type="reset" value="Limpar">
    </form>
    <a href="index.php"> Clique aqui para voltar ao Menu</a>
</body>
</html>
?>