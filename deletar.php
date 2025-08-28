<?php
include("conexao.php");

$id = $_GET['id'];

$sql = "DELETE FROM usuarios WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    echo "Usuário deletado com sucesso!";
} else {
    echo "Erro: " . mysqli_error($conn);
}

echo "<br><a href='listar.php'>Voltar</a>";
?>
