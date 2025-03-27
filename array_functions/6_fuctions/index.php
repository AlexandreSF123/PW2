<?php
    $alunos = [
        'Saladeira Barbosa',
        'Maxssoel Barbosa dos Santos',
        'Marquinhos Vieira Pinto'
    ];

    dizerOla($alunos);

    function dizerOla($estudantes){
        foreach ($estudantes as $index => $estudante) {
            echo "<h1>$estudante</h1>";
        }
     }

?>