<?php
// Criando a classe Pessoa (base para Aluno e Professor)
class Pessoa {
    // Propriedade
    public $nome;
    public $idade;
    // Construtor
    public function __construct($nome, $idade) {
        $this->nome = $nome;
    }

    // Método para se apresentar
    public function apresentar() {
        echo "Olá, me chamo {$this->nome}.<br>";
    }
}

// Classe Aluno para estender Pessoa
class Aluno extends Pessoa {
    // Método para o aluno estudar
    public function estudar() {
        echo "Me chamo {$this->nome} e sou uma aluna.<br>";
    }
}

// Classe Professor para estender Pessoa
class Professor extends Pessoa {
    // Método para o professor ensinar
    public function ensinar() {
        echo "Tamo junto, me chamo {$this->nome} e sou professora.";
    }
}

// Criar objetos
$lais = new Aluno("Lais", 18);
$thalita = new Professor("Thalita", 89);

// Chamar os métodos dos objetos
$lais->apresentar();
$thalita->apresentar();
$lais->estudar();
$thalita->ensinar();
?>
