<?php
$nome = $_POST['nome'] ?? '';
$acertos = 0;
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
    <form action="desafio_aula07_post2.php" method="post">
    <h3>Qual o anime que tem a garota viado?</h3>
    <input type="radio" name="a1" value="Shika" required>Shikanoko Nokonoko Koshitantan<br><br>
    <input type="radio" name="a1" value="Maid">Maid Dragon<br><br>

    <input type="hidden" name="nome" value="<?php echo htmlspecialchars($nome); ?>">
    <input type="hidden" name="acertos" value="<?php echo $acertos; ?>">

    <button type="submit">Proxima</button>
    </form>
</body>
</html>