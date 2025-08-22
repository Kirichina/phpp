<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function soma($a, $b){
    return $a + $b;
    }
     function subtracao($a, $b){
    return $a - $b;
    } function multiplicacao($a, $b){
    return $a * $b;
    } function divisao($a, $b){
    return $a / $b;
    }

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operacao = $_POST['operacao'];

    switch($operacao){
        case "soma";
        $resultado = soma($num1, $num2);
        $op = "+";
        break;
        case "subtracao";
        $resultado = subtracao($num1, $num2);
        $op = "-";
        break; 
        case "multiplicacao";
        $resultado = multiplicacao($num1, $num2);
        $op = "*";
        break; 
        case "divisao";
        $resultado = divisao($num1, $num2);
        $op = "/";
        break;
    }

    echo "<h2>Resultado:</h2>";
    echo "<p>$num1 $op $num2 = <strong>$resultado</strong></p>";
    echo '<br><a href="calculadora_simples.php">Voltar</a>';
    
    ?>
</body>
</html>