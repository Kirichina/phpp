<?php

$tema = "branco";


if (isset($_COOKIE['tema'])) {
    $tema = $_COOKIE['tema'];
}


$cores = [
    "branco"  => "background-color: white; color: black;",
    "azul"    => "background-color: #2196f3; color: white;",
    "lilas"   => "background-color: #9370db; color: white;",
    "laranja" => "background-color: #ff9800; color: white;",
    "verde"   => "background-color: #4caf50; color: white;",
];


$estilo = $cores[$tema] ?? $cores["branco"];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Página Personalizada</title>
</head>
<body style="<?= $estilo ?>">
    <h1>Bem-vindo!</h1>
    <p>O tema atual é: <strong><?= ucfirst($tema) ?></strong></p>
    <a href="aula08_cookie_preferencias.php">Alterar preferências</a>
</body>
</html>
