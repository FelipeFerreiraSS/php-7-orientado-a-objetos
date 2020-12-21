<?php

class Pessoa {
	const nome = "Felipe";

	public function exibirNome(){
		echo self::nome;           //Use self:: para exibir a constante
	}
}

//$pessoa = new Pessoa();
//$pessoa->exibirNome();

class Felipe extends Pessoa {
	const nome = "Ferreira";

	public function exibirNome() {
		echo parent::nome;          //Use parent:: para referenciar
	}
}

$felipe = new Felipe();
$felipe->exibirNome();