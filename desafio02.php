<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$valores = array();


for ($i = 0; $i < 10; $i++) {
    $valores[$i] = rand(1, 100);
}


echo "Valores sorteados:<br>";
foreach ($valores as $v) {
    echo $v . " ";
}
echo "<br><br>";


for ($i = 0; $i < 9; $i++) {
    for ($j = $i + 1; $j < 10; $j++) {
        if ($valores[$i] > $valores[$j]) {         
            
            $aux = $valores[$i];
            $valores[$i] = $valores[$j];
            $valores[$j] = $aux;
        }
    }
}

echo "Ordem crescente:<br>";
foreach ($valores as $v) {
    echo $v . " ";
}
echo "<br><br>";


for ($i = 0; $i < 9; $i++) {
    for ($j = $i + 1; $j < 10; $j++) {
        if ($valores[$i] < $valores[$j]) {       
            $aux = $valores[$i];
            $valores[$i] = $valores[$j];
            $valores[$j] = $aux;
        }
    }
}

echo "Ordem decrescente:<br>";
foreach ($valores as $v) {
    echo $v . " ";
}
?>

</body>
</html>