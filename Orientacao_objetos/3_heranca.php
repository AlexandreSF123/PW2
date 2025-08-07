<?php
//Classe PAI
class Pessoa{
    public $nome;
    public $tipo;

    public function mostrarTipo() {
    echo "a pessoa $this->nome é do tipo $this->tipo <hr>";
        }
    }
    class PessoaComum extends Pessoa{
        public $cpf;
    }

    class Empresa extends Pessoa {
        public $cnpj;
    }

    $pessoa = new PessoaComum();
    $pessoa->nome = 'Julia';
    $pessoa->tipo = 'Física';

    $empresa = new Empresa();
    $empresa->nome = 'Bomba Products';
    $empresa->tipo = 'Jurídica';

    $pessoa->mostrarTipo();
    $empresa->mostrarTipo();
?>