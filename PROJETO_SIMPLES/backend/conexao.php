<?php
	$host = "localhost"; // endereço do servidor
	$usuario = "root"; // usuário do MySQL
	$senha = ""; // senha do MySQL
	$database = "Blog"; // nome do banco de dados

	
	try{
		//criar instancia em pdo
		$pdo = new PDO("mysqli:host=$host;database=$database", $usuario, $senha);
	//mensagem de erro
	$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXEPTION);
	}catch (PDOExeption $e){
		die('erro de conexão' .$e$e->getMessage());)
	}
	// // Cria a conexão
	// $connection = new mysqli($host, $usuario, $senha, $database);
	
	// // Checa se a conexão foi realizada com sucesso
	// if ($connection->connect_error) {
	//     die("Falha de conexão: " . $connection->connect_error);
	// }
?>
