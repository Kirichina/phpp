<?php
if (isset($_POST['tema'])) {
    
    setcookie("tema", $_POST['tema'], time() + (30 * 24 * 60 * 60));
    header("Location: aula08_cookie_index.php"); 
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Preferências</title>
</head>
<body>
    <h2>Escolha seu tema</h2>
    <form method="post">
        <label><input type="radio" name="tema" value="branco" required> Branco</label><br>
        <label><input type="radio" name="tema" value="azul"> Azul</label><br>
        <label><input type="radio" name="tema" value="lilas"> Lilás</label><br>
        <label><input type="radio" name="tema" value="laranja"> Laranja</label><br>
        <label><input type="radio" name="tema" value="verde"> Verde</label><br><br>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>
