<?php
 // definindo classe
 class Aluno {
    public $nome;
    public $idade;
    public $matricula;

    public function __construct($nome, $idade, $matricula) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->matricula = $matricula;
    }

    

    public function buscaAluno() {
        echo "<h1>O aluno com o nome $this->nome e idade $this->idade a matricula $this->matricula<h1>";
    }

 }
 
 
 $aluno = new Aluno('Mark', '32', '7132056');
 $aluno->buscaAluno();



?>