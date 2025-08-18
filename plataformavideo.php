<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
// Matriz com filmes/séries e seus respectivos gêneros
$listaCompleta = array(
    array("titulo" => "Jujutsu Kaisen",        "genero" => "Animação"),
    array("titulo" => "Attack on Titan",       "genero" => "Animação"),
    array("titulo" => "Oppenheimer",           "genero" => "Drama"),
    array("titulo" => "Demon Slayer",          "genero" => "Animação"),
    array("titulo" => "Stranger Things",       "genero" => "Ficção"),
    array("titulo" => "One Piece",             "genero" => "Animação"),
    array("titulo" => "Arcane",                "genero" => "Animação"),
    array("titulo" => "Peaky Blinders",        "genero" => "Drama"),
    array("titulo" => "Shikanoko Nokonoko Koshitantan",         "genero" => "Animação"), // ainda vou assistir
    array("titulo" => "Love Live Idol",     "genero" => "Animação")  // ainda vou assistir
);


$contagemGeneros = array();

foreach ($listaCompleta as $item) {
    $genero = $item["genero"];
    if (!isset($contagemGeneros[$genero])) {
        $contagemGeneros[$genero] = 1;
    } else {
        $contagemGeneros[$genero]++;
    }
}


$generoPredominante = "";
$maiorQtd = 0;

foreach ($contagemGeneros as $genero => $qtd) {
    if ($qtd > $maiorQtd) {
        $maiorQtd = $qtd;
        $generoPredominante = $genero;
    }
}

echo "Gênero que mais aparece na lista: <b>$generoPredominante</b><br><br>";


$listaFiltrada = array();
foreach ($listaCompleta as $item) {
    if ($item["genero"] == $generoPredominante) {
        $listaFiltrada[] = $item;
    }
}


echo "Títulos do gênero $generoPredominante:<br>";
foreach ($listaFiltrada as $item) {
    echo "- " . $item["titulo"] . "<br>";
}
?>

</body>
</html>