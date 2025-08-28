<?php
class Autor {
    private $id ;
    private $nome;
    private $biografia;
    private $foto;
    

    public function __construct($nome, $biografia, $foto) {
        echo "teste";
        
        if(empty($nome) || empty($biografia) || empty($foto)) {
            return "Favor preencher todos os campos";
        }
        
        if($senha != $confirmar_senha) {
            return "As senhas não se conferem";
        }
        $this->nome = $nome;
        $this->biografia = $biografia;
        $this->foto = $foto;
    }

        public function inserir($nome, $biografia, $foto) {
            global $pdo;
            $stmt = $pdo->prepare("INSERT INTO autor (nome, biografia, foto) VALUES (:nome, :biografia, :foto)");
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':biografia', $biografia);
            $stmt->bindParam(':foto', $foto);
            $stmt->execute();
            return "Autor cadastrado com sucesso!";
        
        }
     

        public function buscar($id) { 
        $stmt = $pdo->query("SELECT * FROM autor WHERE id = $id");
        $autores = $stmt->fetchAll();
    }
    
    public function buscarTodos() { 
        $stmt = $pdo->query("SELECT * FROM autor");
        $autores = $stmt->fetchAll();
    }
    
    public function atualizar($id) { 
        $stmt = $pdo->prepare("UPDATE autor SET nome = :nome, biografia = :biografia, foto = :foto WHERE id = :id");
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':biografia', $biografia);
        $stmt->bindParam(':foto', $foto);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
    
    public function deletar($id) { 
        $stmt = $pdo->prepare('DELETE FROM autor WHERE id = :id');
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
    

}
?>

