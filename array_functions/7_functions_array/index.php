<?php
    $pessoas = [
        [
            'nome' => 'Alexandre o Grande',
            'Idade' => 16
        ],
        [
            'nome' => 'Ronaldo Lichens',
            'Idade' => 90
        ],
        [
            'nome' => 'Lucas Ribeiro',
            'Idade' => 15
        ]      
       ];
 verVoto($pessoas);
 
 function verVoto($index) {
    foreach ($index as $key => $value) {
      if ($value["Idade"] < 69 && $value['Idade'] > 17) {
        echo "<h1>" .  $value["nome"] . " precisa votar</h1>";
        echo '<br>';
      }
      elseif ($value["Idade"] > 15 && $value['Idade'] < 18) {
        echo "<h1>" .  $value["nome"] . " se quiser pode votar</h1>";
        echo '<br>';
            }
            elseif ($value["Idade"] > 70) {
                echo "<h1>" . $value["nome"] . " se quiser pode votar</h1>";
                echo '<br>';   
            }
      else {
        echo "<h1>" . $value["nome"] . " não pode votar</h1>";
        echo '<br>';

    }
    }
 }
 
 ?>