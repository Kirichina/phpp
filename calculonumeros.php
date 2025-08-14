<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $pares = [];
    $impares = [];
    $primos = [];

    for($i = 1; $i <= 100; $i++) {
        if ($i % 2 == 0) {
            $pares[] = $i;
        } else {
            $impares[] = $i;
        }
    

    $primo = true;
    if ($i < 2) {
        $primo = false;
    } else {
        for ($j = 2; $j <= sqrt($i); $j++) {
            if ($i % $j == 0) {
                $primo = false;
                break;
            }
        }
    }
    if ($primo) {
        $primos [] = $i;
    }
}

echo "Pares: " . implode(", ", $pares) . "\n"."<br>";
echo "Impares: " . implode(", ", $impares) . "\n"."<br>";
echo "Primos: " . implode(", ", $primos) . "\n"."<br>";


    ?>
</body>
</html>