<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $idadeUsuario = 22;
    $idadeMinima = 18;

    $podeAcessar = ($idadeUsuario >= $idadeMinima);

    echo "A idade do usuário é de ". $idadeUsuario. " anos É possível acessar o conteúdo? ".($podeAcessar ? 'true' : 'false');



    ?>
</body>
</html>