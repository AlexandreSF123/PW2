<?php
$Animais = [ 
    'Animal1' => [
        'Nome do Animal' => 'Thais Carla',
        'Raça' => 'Baleia Peruana',
        'Cor' => 'Amarelado',
        'Espécie' => 'Mamifero',
        'Peso' => '5T',
        'Idade' => '37 anos',
        'Foto' => 'https://www.cnnbrasil.com.br/wp-content/uploads/sites/12/2023/08/230801144609-01-perucetus-colossus-study-illo.webp'

    ],
    'Animal2' => [
        'Nome do Animal' => 'Lupo',
        'Raça' => 'Caramelo',
        'Cor' => 'Preto',
        'Espécie' => 'Mamifero',
        'Peso' => '20kg',
        'Idade' => '5 Anos',
        'Foto' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTTnsK3shAFssspqhvInluSROx67TInvjfRWQ&s'
    ],
    'Animal3' => [
        'Nome do Animal' => 'Luiz',
        'Raça' => 'Tigre',
        'Cor' => 'Branco, Laranja e preto',
        'Espécie' => 'Mamifero',
        'Peso' => '103kg',
        'Idade' => '8 anos',
        'Foto' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRvJsIGE9WHBqGmzNAhs3-OJG8b08hhnn7uIA&s'
    ],
    'Animal4' => [
        'Nome do Animal' => 'Guilherme',
        'Raça' => 'Ovelha',
        'Cor' => 'preta',
        'Espécie' => 'Mamifero',
        'Peso' => '48kg',
        'Idade' => '5 anos',
        'Foto' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSHepXRnD8oCpLs2YMG0r5bc_sfzNnBUNc-oQ&s'
    ]
    ];

foreach($Animais as $key => $value) {
    echo "<h1> Nome: ". $value['Nome do Animal'] . " </h1>";
    echo "<h1> Cor: ". $value['Cor'] . " </h1>";
    echo "<h1> Espécie: ". $value['Espécie'] . " </h1>";
    echo "<h1> Peso: ". $value['Peso'] . " </h1>";
    echo "<h1> Idade: ". $value['Idade'] . " </h1>";
    
    
    echo "<img src='" . $value["Foto"] . "' style='width: 300px'>";
 }

?>