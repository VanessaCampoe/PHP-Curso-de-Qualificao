<?php 
class Cachorro {
    public $nome;
    public $raca;
    public $idade;
    function latir(){
        echo $this->nome." está latindo<br>";
    }
    function exibirDados(){
        echo "Nome: $this->nome<br>";
        echo "Raça: $this->raca<br>";
        echo "Idade: $this->idade<br>";
    }
}
?>