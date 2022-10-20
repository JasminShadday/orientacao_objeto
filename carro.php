<?php
class Carro{
    public $cor;
    public $marca;
    public $modelo;

    public function ligar (){
        echo "vrum vrum vrum <br>";
    }

    public function frear (){
        echo "para para <br>";
    }

    public function imprimirDados(){
        echo "cor: " .$this->cor."<br>";
        echo "marca: " .$this->marca."<br>";
        echo "modelo: ".$this->modelo."<br>";

    }
}

$carroI = new Carro();
$carroI -> cor = "branco";
$carroI -> marca = "Volkswagen";
$carroI -> modelo = "Audi";

$carroII = new Carro();
$carroII -> cor = "preto";
$carroII -> marca = "Toyota";
$carroII -> modelo = "Corolla";

//mostrar view
$carroI -> ligar ();
$carroI -> frear();
$carroI -> imprimirDados();

$carroII -> ligar();
$carroII -> frear();
$carroII -> imprimirDados();



