<?php

    $estacionamento = [
        'Fusca',
        'Uno',
        'Ferrari'
    ];

    foreach ($estacionamento as $key => $value) {
        echo "<hr>";
        echo "<b>Veiculo" . $key . ": </b>" . $value;
    }
echo "<hr>";

    $patio = [
        [
            'nome' => 'Fusca',
            'Placa' => 'abc123',
            'foto' => 'https://estacaoraridades.com.br/images/anuncio/volkswagen-fusca-1500-i63t2h/volkswagen-fusca-1500-i63t2h-seq-5-16-classico-0319.jpg'
        ],
        [
            'nome' => 'Uno',
            'Placa' => 'btq789',
            'foto' => 'https://i.ytimg.com/vi/Tigy4R3Ousk/maxresdefault.jpg'
        ],
        [
            'nome' => 'Ferrari',
            'Placa' => '3yf98o',
            'foto' => 'https://s2.glbimg.com/x9STLyG-KOIxWHOQJB-AYW2IZbg=/1200x630/s.glbimg.com/jo/g1/f/original/2011/01/31/ferrari_620x465_.jpg'
        ]
    ];

    foreach ($patio as $key => $value) {
        echo "Veiculo: " . $value["nome"];
        echo "Placa: " . $value["Placa"];
        echo "<img src='" . $value["foto"] . "' style='width: 300px'>";
        echo "<hr>";
    }

?>