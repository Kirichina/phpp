<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Dados do Aluno
    $nomeAluno = "Lucy Heartfilia";
    $nota1 = 8.5;
    $nota2 = 7.5;
    $nota3 = 10.0;

    //Calculo da Média
    $media = ($nota1 + $nota2 + $nota3) / 3;

    $status = ($media >= 7) ? "Aprovada" : "Reprovada";

    echo "Aluno: $nomeAluno</p>";
    echo "Média: " . number_format($media, 2, ',', '.'). "</p>";
    echo "Status: $status";
    


    ?>
</body>
</html>