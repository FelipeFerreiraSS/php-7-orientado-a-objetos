<?php 

class Pessoa {           // Coloque a primeira letra maiuscula
	public $nome;        // Atributos
	public $idade;

	public function Falar() {       // Metodo
		echo "Falou";
	}

	public function Falar2() {    //Usar atributos dentro do escopo da class use $this
		echo $this->nome." de ".$this->idade." acabou de falar <br>";
	}
}

// Istanciar a class

$felipe = new Pessoa();
$felipe->nome = "Felipe Ferreira Silva";
$felipe->idade = 21;
$felipe->Falar();
$felipe->Falar2();
var_dump($felipe);

echo $felipe->nome;
