<?php
$aluno = [
    "nome" => "Rayanne",
    "idade" => 17,

    "estudar" => function() use (&$aluno){
        echo "{$aluno['nome']} está estudando."; 
    }

];

$aluno['estudar']();
?>
