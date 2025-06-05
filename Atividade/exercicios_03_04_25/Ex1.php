<?php
$Alunos = [
    'Aluno1' => [
        'Nome' => 'Ricardo',
        'RM' => '84835036',
        'Foto' => 'https://static.vecteezy.com/ti/fotos-gratis/t2/6913998-jovem-estudante-com-laptop-sorrindo-usando-fone-de-ouvido-durante-video-chamada-homem-com-laptop-imagens-foto.jpg',
        'Telefone' => '15997257871'
    ],
    'Aluno2' => [
        'Nome' => 'Osvaldo',
        'RM' => '48643739',
        'Foto' => 'https://w7.pngwing.com/pngs/241/831/png-transparent-humpty-dumpty-puss-in-boots-alice-s-adventures-in-wonderland-and-through-the-looking-glass-youtube-puss-in-boots-thumbnail.png',
        'Telefone' => '15997346262'
    ],
    'Aluno3' => [
        'Nome' => 'Vinicius',
        'RM' => '16435892',
        'Foto' => 'https://pbs.twimg.com/media/GEr-sY8XQAAB5hJ.jpg',
        'Telefone' => '15992747640'
    ],
    'Aluno4' => [
        'Nome' => 'Pericles',
        'RM' => '94026386',
        'Foto' => 'https://tm.ibxk.com.br/2019/02/17/17124052466014.jpg',
        'Telefone' => '15993598671'
    ]
    ];
 foreach($Alunos as $key => $value) {
    echo "<h1> ". $value['Nome'] . " </h1>";
    echo "<h1> RM:". $value['RM'] . " </h1>";
    echo "<img src='" . $value["Foto"] . "' style='width: 300px'>";
    echo "<h1>". $value['Telefone'] . " </h1>";
 }
?>