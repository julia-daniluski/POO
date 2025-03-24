<?php

// Criar classe pessoa
// com parâmetros NOME e IDADE
// Criando a classe aluno
class pessoa {
    // Propriedades
    public $nome;
    public $idade;

    // Construtor
    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    // Método para o aluno se apresentar
    public function apresentar() {
        echo "Olá, sou o {$this->nome} e tenho {$this->idade} anos.<br>";
    }
}

// Classe jogador para estender pessoa
class jogador extends pessoa {
    public function jogar() {
        echo "{$this->nome} está jogando.<br>";
    }
}

// Classe técnico para estender pessoa
class tecnico extends pessoa {
    public function treinar() {
        echo "{$this->nome} está montando o treino.<br>";
    }
}

// Criando instâncias de jogador e técnico
$Calleri = new jogador("Calleri", 31);
$Ceni = new tecnico("Rogério Ceni", 52);

// Chamando os métodos
$Calleri->apresentar();
$Ceni->apresentar();
$Calleri->jogar();
$Ceni->treinar();

?>
