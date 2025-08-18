<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
// 1) Criar o array com números inteiros
$numeros = array(10, 20, 30, 40, 50);

echo "Array original: ";
print_r($numeros);
echo "<br><br>";

// 2.a) Adicionar um número no final do array
$numeros[] = 60;   // adiciona o número 60
echo "Após adicionar 60 no final: ";
print_r($numeros);
echo "<br><br>";

// 2.b) Remover o segundo elemento do array (índice 1)
unset($numeros[1]);
echo "Após remover o segundo elemento: ";
print_r($numeros);
echo "<br><br>";

// 2.c) Encontrar o índice do número 40
$indice = array_search(40, $numeros);
echo "O índice do número 40 é: " . $indice . "<br><br>";

// 2.d) Inverter a ordem dos elementos
$numeros = array_reverse($numeros);
echo "Array após ser invertido: ";
print_r($numeros);
echo "<br><br>";

// 3) Percorrer o array e imprimir cada elemento
echo "Percorrendo o array:<br>";
foreach ($numeros as $n) {
    echo $n . "<br>";
}
?>

</body>
</html>