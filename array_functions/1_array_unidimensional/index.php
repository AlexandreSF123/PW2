<?php
 // vetor = array  
    $lista_frutas = [];
 // Array Sequencial utiliza Números
    $lista_frutas[0] = 'Banana';
    $lista_frutas[1] = 'Maçã';
    $lista_frutas[2] = 'Morango';
    $lista_frutas[3] = 'Uva';

    echo '<pre>';
    echo var_dump($lista_frutas);
    
    $lista_objeto = [];
    // Array Associativo utiliza texto
    $lista_objeto['Objeto1'] = 'Bola';
    $lista_objeto['Objeto2'] = 'Boneca';

    echo '<pre>';
    echo var_dump($lista_objeto);
?>