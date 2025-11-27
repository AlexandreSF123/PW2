<?php
	include 'cors.php';
	include 'conexao.php'; 

if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $codproduto = isset($_GET['codproduto']) ? $_GET['codproduto'] : exit();

        if(empty($codproduto)) {
            echo "O ID é obrigatório!";
            exit();
        }

        $stmt = $pdo->prepare('SELECT * FROM produtos WHERE codproduto = :codproduto');
        $stmt->bindParam(':codproduto', $codproduto);
        $stmt->execute();
        $usuario = $stmt->fetchAll();
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $codproduto = isset($_POST['codproduto']) ? $_POST['codproduto'] : null;
        $marca = isset($_POST['marca']) ? $_POST['marca'] : null;
        $descricao = isset($_POST['descricao']) ? $_POST['descricao'] : null;
        $preco = isset($_POST['preco']) ? $_POST['preco'] : null;
        $categoria = isset($_POST['categoria']) ? $_POST['categoria'] : null;

        if (empty($codproduto)) {
            echo "ID é obrigatório!";
            exit();
        }

        if (empty($marca)) {
            echo "Nome do usuario é obrigatório!";
            exit();
        }

        if (empty($descricao)) {
            echo "O campo da descricao é obrigatório";
            exit();
        }

        if (empty($preco)) {
            echo "O campo da preco é obrigatório";
            exit();
        }

        if (empty($categoria)) {
            echo "O campo da categoria é obrigatório";
            exit();
        }

        $stmt = $pdo->prepare('UPDATE usuario SET marca = :marca, descricao = :descricao, preco = :preco, categoria = :categoria WHERE codproduto = :codproduto');
        $stmt->bindParam(':codproduto', $codproduto);
        $stmt->bindParam(':marca', $marca);
        $stmt->bindParam(':marca', $marca);
        $stmt->bindParam(':preco', $preco);
        $stmt->bindParam(':categoria', $categoria);
        $stmt->execute();

        header('Location: read.php');

    }
    ?>