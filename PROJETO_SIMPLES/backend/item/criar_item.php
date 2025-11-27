<?php
	include 'cors.php';
	include 'conexao.php';    
    
$marca = isset($_POST['marca']) ? $_POST['marca'] : exit() ;
$nome = isset($_POST['nome']) ? $_POST['nome'] : exit() ;
$descricao = isset($_POST['descricao']) ? $_POST['descricao'] : exit() ;
$preco = isset($_POST['preco']) ? $_POST['preco'] : exit() ;
$categoria = isset($_POST['categoria']) ? $_POST['categoria'] : exit() ;
//statment
$stmt = $pdo->prepare('INSERT INTO produto (marca, nome, descricao, preco, categoria) VALUES (:marca, :nome, :descricao, :preco, :categoria)');
$stmt->bindParam(':marca', $marca);
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':descricao', $descricao);
$stmt->bindParam(':preco', $preco);
$stmt->bindParam(':categoria', $categoria);
$stmt->execute();

    
    ?>