<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] ==='GET'){
        $login = $_GET['login'];
        $pass = $_GET['pass'];
    echo "<h1> Metodo GET $login e $pass </h1>";
    }
    
    if ($_SERVER['REQUEST_METHOD'] ==='POST'){
        $login = $_POST['login'];
        $pass = $_POST['pass'];
    echo "<h1> Metodo POST $login e $pass </h1>";
    }
    ?>
</body>
</html>