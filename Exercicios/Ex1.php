<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
<label for="nota">Nome do Abençoado</label>
            <input type="number" name="nota" id="nota"  >
            <input type="submit" value="Enviar">

     </fieldset>
</body>
</html>
<?php

if (ISSET($_GET['nota']) >= 7) {
    echo ('APROVADO');
}if (ISSET($_GET('$nota')) < 7 && ISSET($_GET('nota')) > 5) {
    echo ("RECUPERAÇÃO");
}
else 
    echo ("REPROVADO")


?>