<?php
$nome = $_POST['nome'] ?? 'Participante';
$acertos = $_POST['acertos'] ?? 0;

if ($_POST['a3'] == "Sim"){
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
    <h2>Resultado Final</h2>
    <p>Parabens, <?php echo htmlspecialchars($nome); ?>!</p>
    <p>Voce acertou <?php echo $acertos; ?> de 3 perguntas.</p>
    
    <form action="desafio_aula07.php" method="post">
        <button type="submit">Reiniciar</button>
    </form>
    
    </form>
</body>
</html>