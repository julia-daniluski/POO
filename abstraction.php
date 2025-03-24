<?php

abstract class Pessoa{
    public $nome;
    public function __construct($nome) {
        $this->nome = $nome;
    }
}

class Aluno extends Pessoa{
}

class Professor extends Pessoa{
    
}

$alexya = new Aluno ("Alexya");
echo $alexya->nome . " é ela!";
?>





