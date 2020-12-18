<?php
 // recurso que permite que classes compartilhem atributos e metodos para aproveitar codigos

class Veiculo {
	public $modelo;
	public $cor;
	public $ano;

	public function Andar() {
		echo "andou";
	}

	public function Parar() {
		echo "parou";
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

$carro = new Carro();
$carro->modelo = "Astra";
$carro->cor = "Prata";
$carro->ano= 1999;

$carro->Andar();
echo "<br>";
$carro->ligarLimpador();
var_dump($carro);

echo "<hr>";

$moto = new Moto();
$moto->modelo = "Biz";
$moto->cor = "preta";
$moto->ano = 2003;

$moto->Parar();
echo "<br>";
$moto->darGrau();
var_dump($moto);