<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
// Variáveis do perfil
$nome = "Christina"; // String
$idade = 24; // Integer
$altura = 1.58; // Float
$estudante = true; // Boolean
$hobbies = array("Assistir animes", "Jogar JRPGs", "Ler mangás"); // Array

// Exibindo informações
echo "Meu nome é $nome e tenho $idade anos!<br>";
echo "Tenho $altura m de altura e... " . ($estudante ? "sou uma estudante dedicada" : "no momento não sou estudante") . "<br>";
echo "Meus hobbies favoritos são: " . implode("  ", $hobbies) . " <br>";

// Desafio extra: exibindo um hobby específico
echo "Meu hobby super especial é: {$hobbies[0]}";
?>
</body>
</html>