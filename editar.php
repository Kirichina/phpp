<?php
include("conexao.php");

$id = $_GET['id'];
$sql = "SELECT * FROM usuarios WHERE id=$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<h1>Editar Usuário</h1>

<form action="atualizar.php" method="post">
    <input type="hidden" name="id" value="<?= $row['id'] ?>">
    Nome: <input type="text" name="nome" value="<?= $row['nome'] ?>" required><br><br>
    E-mail: <input type="email" name="email" value="<?= $row['email'] ?>" required><br><br>
    <button type="submit">Atualizar</button>
</form>

<a href="listar.php">⬅ Voltar</a>
