<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap ícones -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">


    <title>Teste escola</title>
</head>
<body>
    <header class="bg-primary text-white text-center py-3">
        <h1>SPLIT RIVER HIGH SCHOOL!</h1>
    </header>

    <main><div id="respostas" class="container ms-2 d-flex flex-column">
    </div></main>

    <?php

    class Pessoa {
        // Propriedades
        public $nome;
        public $idade;
        private $nota;
        public $materia;

        // Construtor
        public function __construct($nome, $idade, $nota, $materia) {
            $this->nome = $nome;
            $this->idade = $idade;
            $this->nota = $nota;
            $this->materia = $materia;
        }

        // Método para a pessoa se apresentar
        public function falar() {
            echo "Olá, sou o(a) {$this->nome}.<br>";
        }

        // Método para ver a nota (método público)
        public function verNota() {
            return $this->nota;
        }
    }

    // Classe Aluno que estende Pessoa
    class Aluno extends Pessoa {
        public function aprender() {
            echo "{$this->nome} tirou {$this->verNota()} na última prova de {$this->materia}.<br>";
        }
    }

    // Classe Professor que estende Pessoa
    class Professor extends Pessoa {
        public function ensinar() {
            echo "{$this->nome} passou uma prova de recuperação para sua turma.<br>";
        }
    }
    
    // Criando uma instância de Aluno
    $aluno1 = new Aluno("Wally", 18, 0, "fisica");
    $aluno2 = new Aluno("Rhonda", 17, 10, "inglês");
    $aluno3 = new Aluno("Maddy", 17, 9.9, "Literatura");
    $professor1 = new Professor("Dr. Martin", 38, 0, "quimica");
    $professor2 = new Professor("Sr. Manfredo", 42, 0, "inglês");
    $professor3 = new Professor("Sr. Anderson", 43, 0, "Literatura");
    echo $aluno1->nome . "<br>";
    $aluno1->falar();
    echo "Nota do aluno: " . $aluno1->verNota() . "<br>";
    $aluno1->aprender();    
    echo $professor1->nome . "<br>";
    $professor1->falar();
    $professor1->ensinar();
    echo $aluno2->nome . "<br>";
    $aluno2->falar();
    echo "Nota do aluno: " . $aluno2->verNota() . "<br>";
    $aluno2->aprender();    
    echo $professor2->nome . "<br>";
    $professor2->falar();
    $professor2->ensinar();
    echo $aluno3->nome . "<br>";
    $aluno3->falar();
    echo "Nota do aluno: " . $aluno3->verNota() . "<br>";
    $aluno3->aprender();    
    echo $professor3->nome . "<br>";
    $professor3->falar();
    $professor3->ensinar();

    ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
