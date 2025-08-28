<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Usuários</title>
</head>
<body>
    <h1>Cadastro de Usuários</h1>

    <form action="inserir.php" method="post">
        Nome: <input type="text" name="nome" required><br><br>
        E-mail: <input type="email" name="email" required><br><br>
        <button type="submit">Cadastrar</button>
    </form>

    <br>
    <a href="listar.php">Ver usuários cadastrados</a>
</body>
</html>
