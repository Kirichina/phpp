<?php
 // definindo classe
 class Pessoa {
    private $id;
    protected $nome;
    public $email;

    public function __construct($nome, $email) {
        $this->nome = $nome;
        $this->email = $email;
    }

    

    public function buscaPessoa($cpf) {
        echo "<h1>A pessoa com o ID" .$this->getId(). "nome $this->nome e o e-mail $this->email o cpf $cpf<h1>";
    }

    public function getId(){
        return $this->id;
    }
    public function setId($id){
        if($id <= 0){
            echo "<h2>O ID informado é invalido</h2>";
        }
        else {
            $this->id = $id;
        }
        
    }
 }

 class PessoaFisica extends Pessoa{
    protected $cpf;
    public function getCpf(){
        return $this->cpf;
    }
    public function setCpf($cpf){
        $this->cpf = $cpf;
    }
    
 }
 $pessoa = new PessoaFisica('Beltrano', 'beltrano@gmail.com');
 $pessoa->setId(3);
 $pessoa->setCpf('12345678900');
 $pessoa->buscaPessoa($pessoa->getCpf());

 /* Criando o meu objeto
 $pessoa = new Pessoa('Fulano','fulano@gmail.com');
 $pessoa->setId(-8);
 $pessoa ->nome = 'Fulano';
 $pessoa ->email = 'fulano@gmail.com';
 $pessoa->buscaPessoa();
// var_dump($pessoa);
//echo "<br>";

 //Criando o meu objeto
 $pessoa2 = new Pessoa('Sicrano', 'sicrano@gmail.com');
 $pessoa2->setId(2);
//$pessoa2->nome = 'Sicrano';
// $pessoa2 ->email = 'sicrano@gmail.com';
 //var_dump($pessoa2);
 $pessoa2->buscaPessoa();*/


?>
