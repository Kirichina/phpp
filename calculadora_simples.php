<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Calculadora</h2>
    <form action="processador.php" method="post">
        <label>N° 1:</label>
        <input type="number" name="num1" step="any" required><br><br>
        <label>N° 2:</label>
        <input type="number" name="num2" step="any" required><br><br>

        <label>Operação:</label>
        <select name="operacao">
        <option value="soma">Somar</option>
        <option value="subtracao">Subtrair</option>
        <option value="multiplicacao">Multiplicar</option>
        <option value="divisao">Dividir</option>
        </select><br><br>
        <button type="submit">Calcular</button>
    </form>
</body>
</html>