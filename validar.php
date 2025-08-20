<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $usuarioCorreto = "mark";
    $senhaCorreta = "tuan";

  
    if ($usuario === $usuarioCorreto && $senha === $senhaCorreta) {
        echo "<h2>Login realizado com sucesso! Bem-vindo, $usuario!</h2>";
    } else {
        echo "<h2>Usuário ou senha incorretos!</h2>";
        echo '<a href="index.php">Voltar para o login</a>';
    }
}
?>

</body>
</html>