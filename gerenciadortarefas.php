<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $tarefaCompleta = true;
    $tarefaAtribuida = false;

    $tarefaPodeSerFinalizada = ($tarefaCompleta && $tarefaAtribuida);

    echo "A tarefa pode ser finalizada? ".($tarefaPodeSerFinalizada ? 'true' : 'false');

    $tarefaAtribuida = true;
    $tarefaPodeSerFinalizada = ($tarefaCompleta && $tarefaAtribuida);

    echo "<br> A tarefa pode ser finalizada? ".($tarefaPodeSerFinalizada ? 'true' : 'false');

    ?>
</body>
</html>