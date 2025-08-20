<?php
$nome = $_POST['nome'] ?? '';
$acertos = $_POST['acertos'] ?? 0;

if ($_POST['a2'] == "Lucy Kick"){
    $acertos++;
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
    <h1>Selecione a opção correta</h1>
    <form action="desafio_aula07_resultado.php" method="post">
    <h3>O Inosuke consegue mudar seus orgaos de lugar?</h3>
    <input type="radio" name="a3" value="Sim" required>Sim<br><br>
    <input type="radio" name="a3" value="Nao">Nao<br><br>

    <input type="hidden" name="nome" value="<?php echo htmlspecialchars($nome); ?>">
    <input type="hidden" name="acertos" value="<?php echo $acertos; ?>">

    <button type="submit">Finalizar</button>
    </form>
</body>
</html>