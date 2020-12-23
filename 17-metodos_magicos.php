<?php

// invok -> quando tento usar um objeto como função
// tostring
// get
// set  ->seta um valor

// set e get
/*
class Pessoa {
	private $nome;

	public function __set($nome, $valor) {
		$this->nome = $valor;
	}

	public function __get($nome) {
		return $this->nome;
	}
}

$pessoa = new Pessoa();
$pessoa->nome = "Felipe";
echo $pessoa->nome;

class Pessoa {
	private $dados = array();

	public function __set($nome, $valor) {
		$this->dados[$nome] = $valor;
	}

	public function __get($nome) {
		return $this->dados[$nome];
	}
}

$pessoa = new Pessoa();
$pessoa->nome = "Felipe";
$pessoa->idade = 21;
echo $pessoa->nome."<br>";
echo $pessoa->idade."<br>";
*/

// tostring
/*
$pessoa = new Pessoa();
$pessoa->nome = "Felipe";
echo $pessoa->nome;

class Pessoa {
	private $dados = array();

	public function __set($nome, $valor) {
		$this->dados[$nome] = $valor;
	}

	public function __get($nome) {
		return $this->dados[$nome];
	}

	public function __tostring() {
		return "Tentei emprimir o objeto";
	}
}

$pessoa = new Pessoa();

echo $pessoa;
*/


// invoke
$pessoa = new Pessoa();
$pessoa->nome = "Felipe";
echo $pessoa->nome;

class Pessoa {
	private $dados = array();

	public function __set($nome, $valor) {
		$this->dados[$nome] = $valor;
	}

	public function __get($nome) {
		return $this->dados[$nome];
	}

	public function __tostring() {
		return "Tentei emprimir o objeto";
	}

	public function __invoke() {
		return "Objeto como funcão";
	}
}

$pessoa = new Pessoa();

echo $pessoa();