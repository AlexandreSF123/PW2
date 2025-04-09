<?php
$cursos = [
    "Etec" => [ 
    "Desenvolvimento de Sistemas" => [
        "Programação Mobile" => ["Módulo I", "Módulo II"],
        "Programação Web" => ["Módulo I", "Módulo II", "Módulo III", "Módulo IV"],
        "Técnicas Avançadas de Programação de Algoritmos" => [],
        "Inglês" => ["Módulo I", "Módulo II", "Módulo III"]
    ],
    
    "Administração" => [
        "Recursos Humanos" => ["Módulo I", "Módulo II"],
        "Gestão de Pessoas" => [],
        "Teoria da Administração" => [],
        "Inglês" => ["Módulo I"]
    ],
    
    ]
];

foreach ($cursos as $instituicao => $areas) {
    echo "<li><strong>$instituicao</strong></li><br>";
    foreach ($areas as $area => $subcategorias) {
        echo "<ul></ul><li style='color: blue;'>$area</li><br>" ; 
    foreach ($subcategorias as $subcategoria => $modulos) {
        echo "<ul><li>$subcategoria</li></ul>";
        foreach ($modulos as $modulo) {
            echo "<ul><dd><li>$modulo </li></dd></ul>";
        }
    }
  }
}

?>
