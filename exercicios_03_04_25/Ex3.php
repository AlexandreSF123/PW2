<?php
$Escola = [
    "Etec" => [
        "Desenvolvimento de Sistemas" => [
            "1-Programação Mobile" => ["   Módulo I", "   Módulo II"],
            "2-Programação Web" => ["   Módulo I", "   Módulo II", "   Módulo III", "   Módulo IV"],
            "3-Técnicas Avançadas de Programação de Algoritmos" => [],
            "4-Inglês" => ["Módulo I","   Módulo II", "Módulo III"]
        ],
        "Administração" => [
            "1-Recursos Humanos" => ["Módulo I", "Módulo II"],
            "2-Gestão de Pessoas",
            "3-Teoria da Administração",
            "4-Inglês" => [" Módulo I"]
        ]
    ]
];
function displayArray($array) {
    foreach ($array as $key => $value) {
        if (is_array($value)) {
            echo "<b>"."$key\n" . "</b>";
            echo "<br>";
            displayArray($value);
        } else {
            echo " - $value\n";
            echo "<br>";
        }
    }
}

displayArray($Escola);
