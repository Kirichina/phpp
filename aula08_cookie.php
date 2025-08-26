<?php
$cookie_nome = "nome";
$cookie_valor = "fulano";
$novoValor = "";

echo "<h1>DEFINIR COOKIE</h1>";
var_dump($_COOKIE);
if(!isset($_COOKIE[$cookie_nome])) {
    echo "O nome do Cookie '". $cookie_nome . "'ainda não foi inicializado!";
    setcookie($cookie_nome, $cookie_valor, time() + (86400 * 30), "/"); // 86400 = 1 day
} else {
    echo "Cookie '" . $cookie_nome . "' foi inicializado!<br>";
    echo "O valor é: " . $_COOKIE[$cookie_nome];
    $novoValor = $_COOKIE[$cookie_nome];
    }
    $novoValor = ($novoValor == ""?"sicrano":$novoValor);
    echo "<h2> O valor definido é $novoValor</h2>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>