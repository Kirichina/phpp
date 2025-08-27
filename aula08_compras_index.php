<?php
session_start();


$produtos = [
    1 => ["nome" => "Camisa", "preco" => 50.00],
    2 => ["nome" => "Calça", "preco" => 120.00],
    3 => ["nome" => "Tênis", "preco" => 200.00],
    4 => ["nome" => "Boné", "preco" => 30.00],
];


if (!isset($_SESSION['carrinho'])) {
    $_SESSION['carrinho'] = [];
}


if (isset($_GET['adicionar'])) {
    $idProduto = (int) $_GET['adicionar'];

    
    if (isset($produtos[$idProduto])) {
        $_SESSION['carrinho'][] = $produtos[$idProduto];
    }
}


$quantidadeItens = count($_SESSION['carrinho']);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Loja - Produtos</title>
</head>
<body>
    <h1>Loja Virtual</h1>
    <p><a href="aula08_compras_carrinho.php"> Carrinho (<?= $quantidadeItens ?> itens)</a></p>

    <h2>Produtos</h2>
    <table border="1" cellpadding="10">
        <tr>
            <th>Produto</th>
            <th>Preço (R$)</th>
            <th>Ação</th>
        </tr>
        <?php foreach ($produtos as $id => $produto): ?>
        <tr>
            <td><?= htmlspecialchars($produto['nome']) ?></td>
            <td><?= number_format($produto['preco'], 2, ',', '.') ?></td>
            <td><a href="aula08_compras_index.php?adicionar=<?= $id ?>">Adicionar ao Carrinho</a></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
