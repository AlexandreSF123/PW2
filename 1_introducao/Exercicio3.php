<?php
    $idade = 60;
     if ($idade > 60) {
        echo "Idoso";
    }
     elseif ($idade >= 18 && $idade <= 60) {
        echo "Adulto"; 
    }
     elseif ($idade <= 18 && $idade >=13) {
        echo "Adolescente";
     }
     else {
        echo "Criança";
     }
     




?>