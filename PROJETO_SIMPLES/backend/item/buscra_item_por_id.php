<?php
include 'cors.php';
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Recebe o JSON enviado pela página
    $data = file_get_contents("php://input");
    $requestData = json_decode($data);

    // ID enviado pela URL ou pelo JSON
    $idProduto = $requestData->idProduto;

    // Query estilo marketplace (Amazon/MercadoLivre)
    $sql = "SELECT * FROM produtos WHERE id = '$idProduto'";

    $result = $connection->query($sql);

    if ($result->num_rows > 0) {

        $produto = $result->fetch_assoc();

        $response = [
            'status' => 'OK',
            'produto' => $produto
        ];

    } else {
        $response = [
            'status' => 'ERROR',
            'message' => 'Produto não encontrado!'
        ];
    }

    echo json_encode($response);
}
?>
