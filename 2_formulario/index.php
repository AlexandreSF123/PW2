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
            <legend>Informação sobre você</legend>
            <label for="Nome">Nome do Abençoado</label>
            <input type="text" name="nome" id="nome" placeholder="Nome da Inteligência" >
        <label for="Status">Status</label>
            <input type="text" name="Status" id="Status" placeholder="Aqui Cego!!" >
        <input type="submit" value="Enviar">
            
        </fieldset>    
            </form>
        </body> 
        </html>
        <?php 
            if (ISSET($_GET['nome'])) {
                if (empty($_GET['nome'])) {
                    echo "Escreve Algo Cara!!";
                } 
                else {
            echo $_GET['nome'];
            }}
             if (isset($_GET['Status'])) {
                if (empty($_GET['Status'])) {
                    echo "Escreve Algo Cara!!";
                }
                 else {
                echo $_GET['Status'];
            }}   
            ?>