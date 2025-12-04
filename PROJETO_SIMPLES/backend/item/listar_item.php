<?php
include 'cors.php';
include 'conexao.php';

header("Content-Type: application/json");

// Pegamos 20 produtos aleatórios
$sql = $connection->query("SELECT * FROM produtos ORDER BY RAND() LIMIT 20");

$produtos = [];

while ($p = $sql->fetch_assoc()) {
    $produtos[] = $p;
}

echo json_encode([
    "status" => "OK",
    "produtos" => $produtos
]);
?>
