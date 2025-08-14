<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeiro codigo php</title>
</head>
<body>
    <?php
    $status = 404;

    if ($status == 200) {
        echo "Tudo certo! Vitória épica desbloqueada!";
    } elseif ($status == 404) {
        echo "404... A página foi para um isekai e não deixou bilhete";
    } elseif ($status == 500) {
        echo "Erro 500! O servidor entrou em modo berserk!";
    } else {
        echo "Hmm... Evento desconhecido detectado. Continue acompanhando a próxima temporada";
    }
    ?>
</body>
</html>