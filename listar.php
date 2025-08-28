<?php
include("conexao.php");

$sql = "SELECT * FROM usuarios";
$result = mysqli_query($conn, $sql);

echo "<h1>Lista de Usuários</h1>";
echo "<a href='index.php'>⬅ Voltar</a><br><br>";

if (mysqli_num_rows($result) > 0) {
    echo "<table border='1' cellpadding='10'>";
    echo "<tr><th>ID</th><th>Nome</th><th>Email</th><th>Ações</th></tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['nome']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "<td>
                <a href='editar.php?id=".$row['id']."'>Editar</a> | 
                <a href='deletar.php?id=".$row['id']."'>Deletar</a>
              </td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Nenhum usuário encontrado.";
}
?>
