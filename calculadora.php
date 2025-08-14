<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <?php
    $preçoProduto = 150.00;
    $desconto = 15;

    $preçoDesconto = ($desconto * $preçoProduto) / 100;
    $preçoFinal = $preçoProduto - $preçoDesconto;
    
    echo "O valor original do produto é R$: ".$preçoProduto. " Com 15% de desconto, o preço final é R$: ".$preçoFinal;

    ?>
</body>
</html>