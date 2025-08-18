<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$aluno = array(
    "nome"  => "Lucy",
    "idade" => 20,
    "curso" => "Engenharia Software"
);


echo "Nome: "  . $aluno["nome"]  . "<br>";
echo "Idade: " . $aluno["idade"] . "<br>";
echo "Curso: " . $aluno["curso"] . "<br><br>";


$notas = array(
    "prova1" => 8.5,
    "prova2" => 7.0,
    "prova3" => 9.0
);


$media = ($notas["prova1"] + $notas["prova2"] + $notas["prova3"]) / 3;


echo "A aluna " . $aluno["nome"] . ", do curso de " . $aluno["curso"] .
     ", obteve média " . number_format($media, 1);
?>

</body>
</html>