<?php

// Criando a classe Aluno
class Aluno {
    // Propriedades
    public $nome;
    public $idade;
    private $nota;
    
    // Construtor
    public function __construct($nome, $idade, $nota) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->nota = $nota;
    }
    public function verNota(){
        return $this->nota;
    }
}

$aluno1 = new Aluno ("Dani", 1209, -3 );
echo $aluno1->nome;
echo $aluno1->verNota();
?>
