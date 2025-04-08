<?php
// Estrutura do array com a ordem original
$data = [
    "Etec" => [
        "Desenvolvimento de Sistemas" => [
            "Programação Mobile" => ["Módulo I", "Módulo II"],
            "Programação Web" => ["Módulo I", "Módulo II", "Módulo III", "Módulo IV"],
            "Técnicas Avançadas de Programação de Algoritmos",
            "Inglês" => ["Módulo I", "Módulo II", "Módulo III"]
        ],
        "Administração" => [
            "Recursos Humanos" => ["Módulo I", "Módulo II"],
            "Gestão de Pessoas",
            "Teoria da Administração",
            "Inglês" => ["Módulo I"]
        ]
    ]
];

// Função para exibir o array mantendo a hierarquia
function displayArray($array) {
    foreach ($array as $key => $value) {
        if (is_array($value)) {
            echo "$key:\n";
            displayArray($value);
        } else {
            echo " - $value\n";
        }
    }
}

displayArray($data);
