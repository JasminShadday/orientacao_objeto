<?php
class Pessoa{
    public $nome;
    public $idade;
    public $peso;

    public function andar(){
        echo "andar andar <br>";
    }

    public function falar(){
        echo "bla bla bla <br>";
    }

    public function imprimirDados(){
        //estamos usando $this pq foi declarado la em cima nao dentro da classe 
        echo "Nome: ".$this->nome."<br>";
        echo "Idade: ".$this->idade."<br>";
        echo "Peso: ".$this->peso."<br>";

    }
}

$shadday = new Pessoa();
$shadday -> nome = "Shadday";
$shadday -> idade = 18;
$shadday -> peso = 65;

$natnat = new Pessoa();
$natnat -> nome = "Natnat";
$natnat-> idade = 19;
$natnat -> peso = 62;

//mostrar no view
$shadday -> andar ();
$shadday -> falar ();
$shadday -> imprimirDados();

//var_dump($shadday);