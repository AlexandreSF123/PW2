<?php
$host = "localhost"; 
$usuario = "root"; 
$senha = ""; 
$database = "Blog"; 

try {
    // Criar instância PDO 
    $pdo = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $usuario, $senha);

    // identificar erros
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Conectado com sucesso!";
} 
catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
	// // Cria a conexão
	// $connection = new mysqli($host, $usuario, $senha, $database);
	
	// // Checa se a conexão foi realizada com sucesso
	// if ($connection->connect_error) {
	//     die("Falha de conexão: " . $connection->connect_error);
	// }
?>
