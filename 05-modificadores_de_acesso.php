<?php

 // public -> é assecivel para todos que quiser acesar

// protected -> so é possivel assesar o atributo dentro da class

// private -> só é possivel assesar dentro do esccopo da class

// *** Tambem é possivel usar nos metodos

class Veiculo {
	protected $modelo;
	private $cor;
	public $ano;

	public function Andar() {
		echo "andou";
	}

	public function Parar() {
		echo "parou";
	}

	public function setModelo($m){
		$this->modelo = $m;
	}

	public function getModelo(){
		return $this->modelo;
	}
}

class Carro extends Veiculo {
	public function ligarLimpador () {
		echo "Limpando parabrisa";
	}
}

class Moto extends Veiculo {
	public function darGrau () {
		echo "Dando grau";
	}
}

$veiculo = new Veiculo();
$veiculo->setModelo("Hilux");
echo $veiculo->getModelo();

