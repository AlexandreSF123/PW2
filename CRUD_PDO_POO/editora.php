<?php
class Autor {
    private $id ;
    private $nome;
    private $site;
    private $email;
    

    public function __construct($nome, $site, $email) {
        $this->nome = $nome;
        $this->site = $site;
        $this->email = $email;
    }
    public function inserir() { }

    public function buscar($id) { }
    
    public function buscarTodos() { }
    
    public function atualizar($id) { }
    
    public function deletar($id) { }
    

}
?>