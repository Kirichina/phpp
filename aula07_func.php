<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function mensagem(){
        echo"<h2>Funcao sem parametro e sem return</h2>";
    }
    function mensagemComParametro($texto){
        echo"Mensagem: $texto";
    }
    function mensagemComParametroRetorno($texto){
        $retorno = "<h3>Mensagem => $texto</h3>";
        return $retorno;
    }

    echo"<h1>INICIO DA AULA SOBRE FUNCAO</h1>";
    mensagem();
    mensagemComParametro("Esta funcao recebe um parametro");
    $ret = mensagemComParametroRetorno("Esta mensagem recebe um parametro e teve um retorno");
    echo $ret;
    echo"<h1>FIM DA AULA SOBRE FUNCAO</h1>";
    
    ?>
</body>
</html>