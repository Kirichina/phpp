<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*if(10==10) {
        echo "10 é igual a 10";
    }*/
        /*if (10!=10) {
            echo "igual";
        }
        else{
            echo "não é igual";
        }*/

    /*$idade = 20;
    $sexo = 'M';
    if ($idade >=18 && $sexo=="M") {
            echo "obrigatório se alistar";
        }
        else{
            echo "não é obrigatorio";
        }*/
    
      /*  $idade = 20;
        $sexo = 'M';
        if ($idade >=18 || $sexo=="M") {
            echo "obrigatório se alistar";
        }
        else{
            echo "não é obrigatorio";
        }*/


           /* $hora = date('H');
            echo $hora;
            if($hora >= 7 && $hora <= 12) {
                echo "Acorda, bom dia!";
            }
            elseif($hora >= 13 && $hora <= 18) {
                echo "Hora do café, boa tarde";
            }
            elseif($hora > 19 && $hora <= 23) {
                echo "Tomar banho, boa noite";
            }
            else {
                echo "Que horas são?";
            }*/

               /* $dia_da_semana = 1;
                switch ($dia_da_semana) {
                    case 1:
                        echo "domingo";
                        break;
                     case 2:
                        echo "segunda";
                        break;
                     case 3:
                        echo "terça";
                        break;
                     case 4:
                        echo "quarta";
                        break;
                     case 5:
                        echo "quinta";
                        break;
                     case 6:
                        echo "sexta";
                        break;
                     case 7:
                        echo "sábado";
                        break;
                    default:
                        echo "opção inválida";
                }*/

        

        /*$i = 1;
        while ($i <= 10) {
            echo "$i";
            $i++;
        }
        echo "FIM";*/

       /* $i = 10;
        do {
            echo "$i";
            $i++;
        } while ($i <= 10);
        echo "FIM";*/



        /*for ($i=10; $i > 0; $i--) {
            echo "$i";
        }*/

        
        
        $notas = array();
        $notas['diego'] = 5;
        $notas['christina'] = 10;
        $notas['fernanda'] = 8;

        foreach ($notas as $nota_individual) {
            echo "<h1> $nota_individual </h1>";
        }

    ?>
</body>
</html>