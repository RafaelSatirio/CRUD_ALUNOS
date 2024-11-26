<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recebe o RGM</title>
</head>
<body>
    <h3>Exclusão de Dados</h3>
    <form action="excluirDadosdoBD.php" method="GET">
        Informe o RGM do aluno :
        <input type="numeric" name="rgm">
        <input type="submit" value="consultar">
    </form>
    <br><a href="index.php">Clique aqui para voltar ao Menu!</a>
</body>
</html>