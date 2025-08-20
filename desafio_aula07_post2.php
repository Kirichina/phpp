<?php
$nome = $_POST['nome'] ?? '';
$acertos = $_POST['acertos'] ?? 0;

if ($_POST['a1'] == "Shikanoko Nokonoko Koshitantan"){
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
    <form action="desafio_aula07_post3.php" method="post">
    <h3>Qual o nome da técnica de chute da Lucy?</h3>
    <input type="radio" name="a2" value="Roller" required>Lucy Roller<br><br>
    <input type="radio" name="a2" value="Kick">Lucy Kick<br><br>

    <input type="hidden" name="nome" value="<?php echo htmlspecialchars($nome); ?>">
    <input type="hidden" name="acertos" value="<?php echo $acertos; ?>">

    <button type="submit">Proxima</button>
    </form>
</body>
</html>