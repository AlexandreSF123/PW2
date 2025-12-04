<?php
include '../conexao.php';
include '../cors.php';

header("Content-Type: application/json");

$data = json_decode(file_get_contents("php://input"));

$email = $data->email ?? '';
$senha = $data->senha ?? '';

if (!$email || !$senha) {
    echo json_encode(["status" => "ERROR", "mensagem" => "Email e senha obrigatórios!"]);
    exit;
}

/* 1 — Verifica ADM */
$sql = $pdo->prepare("SELECT * FROM ADM WHERE email = :email AND senha = :senha");
$sql->execute([':email' => $email, ':senha' => $senha]);
$adm = $sql->fetch();

if ($adm) {
    echo json_encode(["status" => "OK", "tipo" => "ADM"]);
    exit;
}

/* 2 — Verifica fornecedor */
$sql = $pdo->prepare("SELECT * FROM fornecedor WHERE email = :email AND senha = :senha");
$sql->execute([':email' => $email, ':senha' => $senha]);
$for = $sql->fetch();

if ($for) {
    echo json_encode(["status" => "OK", "tipo" => "FORNECEDOR"]);
    exit;
}

/* 3 — Verifica usuário comum */
$sql = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email AND senha = :senha");
$sql->execute([':email' => $email, ':senha' => $senha]);
$user = $sql->fetch();

if ($user) {
    echo json_encode(["status" => "OK", "tipo" => "USUARIO"]);
    exit;
}

/* Caso nenhum encontrado */
echo json_encode(["status" => "ERROR", "mensagem" => "Email ou senha incorretos!"]);
?>
