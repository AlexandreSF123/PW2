<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="get">
        <fieldset>
            <legend>Calculadora Ciêntifica</legend>
            <label for="valor1">Valor1</label>
            <input type="number" name="valor1" id="valor1" placeholder="nada" required>
        <label for="valor2">Valor2</label>
            <input type="number" name="valor2" id="valor2" placeholder="nada" required>
        <input type="submit" value="Enviar">
            
        </fieldset>    
            </form>
            <?php 
            if (ISSET($_GET['valor1'])) 
                if (EMPTY($_GET['valor1'])) {
                    echo "Valor 1 Obrigatório";
                } else {
                    exit();
                }
                 if (ISSET($_GET['valor2'])) 
                if (EMPTY($_GET['valor2'])) {
                    echo "Valor 2 Obrigatório";
                }
                else {
                exit();
                }
                echo $_GET['valor1'] + $_GET['valor2']
                  ?>
        </body>
        </html>