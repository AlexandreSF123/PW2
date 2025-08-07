<?php
class Pessoa {
    // Opções de encapsulamento
    //public - A variável é acessível de fora da classe
    //private - É acessível somente dentro da classe 
    //protected - É acessível somente por herança
    public $nome;
    public $idade;

    public function apresentar() {
        echo "Olá meu nome é $this->nome";
        echo "<hr>";
        echo "Tenho $this->idade anos";
    }
}

$aluno1 = new Pessoa();
$aluno1->nome = 'Ricardo';
$aluno1->idade = 15;
$aluno1->apresentar();

$aluno2 = new Pessoa();
$aluno2->nome = 'Lucas';
$aluno2->idade = 16;
$aluno2->apresentar();



?>