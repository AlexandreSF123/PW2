<?php
class EX {
    public $nome;
    public $idade; 

    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }   

    public function falar () {
        echo "Meu nome é $this->nome e tenho $this->idade anos <hr>";
    }
}

class Exemplo extends EX {
    public function falar()
    {
        echo "Meu nome é $this->nome, tenho $this->idade anos ";
    }
}
$eu = new EX("Igor", 16);
$eu->falar();

$tu = new Exemplo("Ricardo", 25);
$tu->falar();
?>