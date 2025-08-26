<?php
    session_start();
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['pessoa2'] = [
        'nome' => $_POST['nome'],
        'idade' => $_POST['idade'],
        'peso' => $_POST['peso'],
        'altura' => $_POST['altura']
    ];
   }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="aula08_pagina2.php" method="post">
    <label for ="Nome">Nome:</label>
        <input type="text" id="login" name="nome">
        <br><br>
        <label for="Idade">Idade:</label>
        <input type="text" id="idade" name="idade">
        <br><br>
        <label for="Peso">Peso:</label>
        <input type="text" id="peso" name="peso">
        <br><br>
        <label for="Altura">Altura:</label>
        <input type="text" id="altura" name="altura">
        <br><br>
        <input type="submit" value=" Salvar">
    </form>
    <h1>Dados Armazenados</h1>

    <h2>Pessoa 1</h2>
    <ul>
        <li>Nome: <?php echo $_SESSION['pessoa1']['nome'] ?? 'N/A'; ?></li>
        <li>Idade: <?php echo $_SESSION['pessoa1']['idade'] ?? 'N/A'; ?></li>
        <li>Peso: <?php echo $_SESSION['pessoa1']['peso'] ?? 'N/A'; ?></li>
        <li>Altura: <?php echo $_SESSION['pessoa1']['altura'] ?? 'N/A'; ?></li>
    </ul>

    <h2>Pessoa 2</h2>
    <ul>
        <li>Nome: <?php echo $_SESSION['pessoa2']['nome'] ?? 'N/A'; ?></li>
        <li>Idade: <?php echo $_SESSION['pessoa2']['idade'] ?? 'N/A'; ?></li>
        <li>Peso: <?php echo $_SESSION['pessoa2']['peso'] ?? 'N/A'; ?></li>
        <li>Altura: <?php echo $_SESSION['pessoa2']['altura'] ?? 'N/A'; ?></li>
    </ul>
</body>
</html>