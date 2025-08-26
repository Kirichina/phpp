<?php
echo "<h1>Inicializando a session</h1>";
    session_start();
    var_dump($_SESSION);
    echo "<h2>".session_id()."</h2>";
    $_SESSION['login'] = 'fulano';
    $_SESSION['senha'] = '123456789';
    var_dump($_SESSION);
    ?>
