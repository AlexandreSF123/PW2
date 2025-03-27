<?php
    $alunos = [
        [
            'nome' => 'Marquinhos',
            'nota' => 5,
        ],
        [
            'nome' => 'Maxssoel',
            'nota' => 10,
        ]
        
        ];
        foreach ($alunos as $key => $estudante) {
            if ($estudante['nota'] < 7 ) 
                echo 'Aluno ' . $estudante['nome'] . ' está reprovado ';
            else 
                echo 'Aluno ' . $estudante['nome'] . ' está aprovado ';
    
           echo '<br>';
}
?>