<?php
// Criando a classe Aluno
class Aluno {
    // Propriedades
    public $nome;
    public $idade;

    // Construtor
    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    // Método para o aluno estudar
    public function estudar() {
        echo "{$this->nome} está estudando tendo {$this->idade} anos.";
    }
}

// Criando um objeto Aluno
$aluno1 = new Aluno("Zani", 92);
//retornando
$aluno1->estudar();

?>
