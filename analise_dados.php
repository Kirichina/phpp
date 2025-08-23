<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $alunos = [
        ['nome' => 'Mark', 'nota' => '7.0'],
        ['nome' => 'Jaebom', 'nota' => '9.5'],
        ['nome' => 'Jackson', 'nota' => '8.0'],
        ['nome' => 'Jinyoung', 'nota' => '6.5'],
        ['nome' => 'Youngjae', 'nota' => '5.5'],
        ['nome' => 'BamBam', 'nota' => '5.6'],
        ['nome' => 'Yugyeom', 'nota' => '5.6']

    ];

    $notaMinima = 6.0;

    function InserirAluno($alunos, $nome, $nota) {
        foreach ($alunos as $aluno){
            if ($aluno['nome'] === $nome) {
                echo "O aluno $nome já possui cadastro<br>";
                return;
            }
        }
        $alunos[] = ['nome' => $nome, 'nota' => $nota];
        echo "Aluno $nome inserido com sucesso<br>";
    }
        inserirAluno($alunos, "Jisung", 8.0);

    function RemoverAluno($alunos, $nome) {
        foreach ($alunos as $i => $aluno) {
            if ($aluno['nome'] === $nome) {
                unset($alunos[$i]);
                echo "Aluno $nome removido com sucesso<br>";
                return;
            }
        }
        echo "Aluno $nome não encontrado<br>";
    }
    removerAluno($alunos, "Youngjae");


    function AlterarNota($alunos, $nome, $novaNota) {
        foreach ($alunos as $aluno) {
            if ($aluno['nome'] === $nome) {
                $aluno['nota'] = $novaNota;
                echo "Nota do aluno $nome alterada para $novaNota<br>";
                return;
            }
        }
        echo "Aluno $nome não encontrado<br>";
    }

    function ConsultarAluno($alunos, $nome, $notaMinima) {
        foreach ($alunos as $aluno) {
            if ($aluno['nome'] === $nome) {
                $status = ($aluno['nota'] >= $notaMinima) ? "Aprovado" : "Reprovado";
                echo "Aluno: {$aluno['nome']} - Nota: {$aluno['nota']} - Status: $status<br>";
                return;
            }
        }
        echo "Aluno $nome não encontrado<br>";
    }

    function ListarAlunos($alunos, $notaMinima) {
    foreach ($alunos as $aluno) {
        $status = ($aluno['nota'] >= $notaMinima) ? "Aprovado" : "Reprovado";
        echo "Aluno: {$aluno['nome']} - Nota: {$aluno['nota']} - Status: $status<br>";
    }
}
    function contarResultados($alunos, $notaMinima) {
    $aprovados = 0;
    $reprovados = 0;

    foreach ($alunos as $aluno) {
        if ($aluno['nota'] >= $notaMinima) {
            $aprovados++;
        } else {
            $reprovados++;
        }
    }

    return [
        'aprovados' => $aprovados,
        'reprovados' => $reprovados
    ];
}
    
    echo "<h3>Lista de alunos:</h3>";
    listarAlunos($alunos, $notaMinima);


    $resultados = contarResultados($alunos, $notaMinima);
    echo "<h3>Resumo:</h3>";
    echo "Total de alunos aprovados: {$resultados['aprovados']}<br>";
    echo "Total de alunos reprovados: {$resultados['reprovados']}<br>";
    ?>
</body>
</html>