<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Buscar Produtos</h2>
    
    <form method="GET" action="produtos.php">
        <input type="text" name="termo" placeholder="Digite o nome do produto">
        <input type="submit" value="Buscar">
    </form>
    <hr>

    <?php
    
    $produtos = array(
        "Sousou no Frieren Vol. 01",
        "Kusuriya no Hitorigoto Vol. 01",
        "Strobe Edge Vol. 03",
        "Fruits Basket Vol. 02",
        "Fairy Tail Vol. 60",
        "Naruto Vol. 15",
        "One Piece Vol. 100"
    );

    
    if (isset($_GET['termo']) && $_GET['termo'] != "") {
        $termo = $_GET['termo']; 
        $encontrados = false;

        echo "<h3>Resultados da busca por: <em>$termo</em></h3>";

        
        foreach ($produtos as $p) {
            
            if (stripos($p, $termo) !== false) {
                echo "<p>✔️ $p</p>";
                $encontrados = true;
            }
        }

        
        if (!$encontrados) {
            echo "<p>Nenhum produto encontrado!</p>";
        }
    } else {
        
        echo "<h3>Lista de Produtos Disponíveis:</h3>";
        foreach ($produtos as $p) {
            echo "<p>• $p</p>";
        }
    }
    ?>

</body>
</html>