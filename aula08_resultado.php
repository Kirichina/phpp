<?php
session_start();
if(!isset($_SESSION['pessoa1_nome'])) || ! 
    isset($_SESSION['pessoa2_nome']) {
        echo "Os dados não foram cadastrados";
    }

?>
