<!DOCTYPE html>
<html lang="pt-br">
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
if (ISSET($_GET['nota'])) {

$nota = ISSET($_GET['nota'])
if($nota > 7) {
    echo ('APROVADO');
}
elseif ($nota == 7 && $nota == 6) 
{
    echo ("RECUPERAÇÃO");
}
else 
{
    echo ("REPROVADO");
}
}
?>