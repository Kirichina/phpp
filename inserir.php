<?php
include("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];

$sql = "INSERT INTO usuarios (nome, email) VALUES ('$nome', '$email')";

if (mysqli_query($conn, $sql)) {
    echo "Usuário cadastrado com sucesso!";
} else {
    echo "Erro: " . mysqli_error($conn);
}

echo "<br><a href='index.php'>Voltar</a>";
?>
