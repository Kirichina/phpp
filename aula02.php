<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        
        echo "<p>oha</p>you</p>";
        $nome= "Choi";
        $idade= "29";
        $salario= 12.254;
        $altura= 1.76;
        $filhos= false;
        $curso= false;


        echo "nome: $nome </p>";
        echo "idade: $idade </p>";
        echo "salario: $salario </p>";
        echo "altura: $altura </p>";
        echo "tem filhos: $filhos </p>";
        

        /*
        echo phpinfo();
        */

        $f = 5/3;
        var_dump($f);

        $g = 5/3;
        settype($g,'float');
        echo $g;


    ?>
</body>
</html>