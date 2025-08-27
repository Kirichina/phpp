<?php
session_start();


if (!isset($_SESSION['carrinho'])) {
    $_SESSION['carrinho'] = [];
}


if (isset($_GET['remover'])) {
    $idRemover = (int) $_GET['remover'];

    if (isset($_SESSION['carrinho'][$idRemover])) {
        unset($_SESSION['carrinho'][$idRemover]);
      
        $_SESSION['carrinho'] = array_values($_SESSION['carrinho']);
    }
}


if (isset($_GET['limpar'])) {
    unset($_SESSION['carrinho']);
    $_SESSION['carrinho'] = [];
}


$quantidadeItens = count($_SESSION['carrinho']);


$total = 0;
foreach ($_SESSION['carrinho'] as $produto) {
    $total += $produto['preco'];
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Meu Carrinho</title>
</head>
<body>
    <h1> Carrinho de Compras</h1>
    <p><a href="aula08_compras_index.php">⬅ Voltar para Loja</a></p>
    <p>Itens no carrinho: <strong><?= $quantidadeItens ?></strong></p>

    <?php if ($quantidadeItens > 0): ?>
        <table border="1" cellpadding="10">
            <tr>
                <th>Produto</th>
                <th>Preço (R$)</th>
                <th>Ação</th>
            </tr>
            <?php foreach ($_SESSION['carrinho'] as $index => $produto): ?>
            <tr>
                <td><?= htmlspecialchars($produto['nome']) ?></td>
                <td><?= number_format($produto['preco'], 2, ',', '.') ?></td>
                <td><a href="aula08_compras_carrinho.php?remover=<?= $index ?>">Remover</a></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <p><strong>Total: R$ <?= number_format($total, 2, ',', '.') ?></strong></p>
        <p><a href="aula08_compras_carrinho.php?limpar=1">Limpar Carrinho</a></p>
    <?php else: ?>
        <p>Seu carrinho está vazio.</p>
    <?php endif; ?>
</body>
</html>
