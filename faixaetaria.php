<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action ="" method="post">
        <label for="nome">Seu nome:</label>
        <input type="text" id="nome" name="nome" required>
        <input type="submit" value="Enviar"><br>
        <label for="idade">Sua idade:</label>
        <input type="number" id="idade" name="idade" required>
        <input type="submit" value="Enviar"><br>

    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        $idade = intval(value: $idade);
        echo "<p><h4>Nome: ".htmlspecialchars($nome)."!</h4>";
        echo "<p><h4>Idade: ".htmlspecialchars($idade)."!</h4>";
        
    }

    if ($idade <= 12) {
        echo "Voce ainda e uma criança!";
    } elseif ($idade <= 18) {
        echo "Adolescente!";
    } elseif ($idade <= 60) {
        "Adulto!";
    } else {
        echo "Idoso!!";
    }
   
    ?>
    
</body>
</html>