<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
echo "<h3>1) Números de 100 a 200 (incremento de 2 em 2):</h3>";

for ($i = 100; $i <= 200; $i += 2) {
    echo $i . " ";
}

echo "<hr>"; 

echo "<h3>2) Valores ímpares de 500 a 1000:</h3>";


for ($i = 501; $i <= 1000; $i += 2) {
    echo $i . " ";
}


?>

</body>
</html>