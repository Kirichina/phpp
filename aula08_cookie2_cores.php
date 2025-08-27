<?php

if (isset($_GET['cor'])) {
    $cor = $_GET['cor'];

    
    setcookie("cor", $cor, time() + (86400 * 30));

   
    header("Location: aula08_cookie2_index.php");
    exit;
} else {
   
    header("Location: aula08_cookie2_index.php");
    exit;
}
