<?php
echo "<h1>Inicializando a session 2.</h1>";
    session_start();
    if(!isset($_SESSION['login'])) {
        echo "<h2>Sessão não inicializada.</h2>";
    }
    else{
        $login = $_SESSION['login'];
        $senha = $_SESSION['senha'];
        echo "<h2> O login informado foi $login e a senha $senha.</h2>";
    }
    ?>