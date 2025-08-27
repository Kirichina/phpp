<?php

$corFundo = "white";


if (isset($_COOKIE['cor'])) {
    $corFundo = $_COOKIE['cor'];
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Escolher Cor</title>
</head>
<body style="background-color: <?= htmlspecialchars($corFundo) ?>;">

    <h1>Escolha a cor de fundo:</h1>

    
    <a href="aula08_cookie2_cores.php?cor=white"><button>Branco</button></a>
    <a href="aula08_cookie2_cores.php?cor=blue"><button>Azul</button></a>
    <a href="aula08_cookie2_cores.php?cor=purple"><button>Lilás</button></a>
    <a href="aula08_cookie2_cores.php?cor=orange"><button>Laranja</button></a>
    <a href="aula08_cookie2_cores.php?cor=green"><button>Verde</button></a>

</body>
</html>
