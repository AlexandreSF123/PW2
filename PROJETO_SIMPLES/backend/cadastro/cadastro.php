<?php
	include 'cors.php';
	include 'conexao.php';
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
        $senha     = $_POST["senha"];
        $nome      = $_POST["nome"];
        $cpf       = $_POST["cpf"];
        $telefone  = $_POST["tel"];
        $endereco  = $_POST["endereco"];
        $cidade    = $_POST["cidade"];
        $cep       = $_POST["CEP"];
        $pais      = $_POST["pais"];
    
        $sql = "INSERT INTO usuarios (senha, nome, cpf, tel,cidade, CEP, pais)
                VALUES ('$senha', '$nome', '$cpf', '$telefone', '$cidade', '$cep', '$pais')";
    
        if ($conn->query($sql) === TRUE) {
            echo "Usuário cadastrado com sucesso!";
        } else {
            echo "Erro ao cadastrar: " . $conn->error;
        }
    }

    header("Content-Type: application/json");

    // se der certo
    echo json_encode(["status" => "ok"]);
    
    // se der erro
    echo json_encode(["status" => "erro", "mensagem" => "Motivo aqui"]);

    ?>
    
    <form method="POST">
        Senha: <input type="password" name="senha"><br>
        Nome: <input type="text" name="nome"><br>
        CPF: <input type="text" name="cpf"><br>
        Telefone: <input type="text" name="telefone"><br>
        Endereço: <input type="text" name="endereco"><br>
        Cidade: <input type="text" name="cidade"><br>
        CEP: <input type="text" name="cep"><br>
        País: <input type="text" name="pais"><br>
        <button type="submit">Cadastrar</button>
    </form>
