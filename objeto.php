<?php
$aluno = [
    "nome" => "Rayanne",
    "idade" => 17,

    "estudar" => function() use (&$aluno){
        echo "{$aluno['nome']} tem {$aluno['idade']} anos e está estudando."; 
    }

];

$aluno['estudar']();
?>
