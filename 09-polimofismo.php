<?php

// é reescrever um metodo herdado da class pai

class Animal {
	public function Andar() {
		echo "Animal andou";
	}

	public function Correr() {
		echo "O animal correu";
	}

}

class Cavalo extends Animal {

	public function Andar() {    // Substituindo metodo Andar
		echo "O cavalo andou.";

		$this->Correr();  //Chamar outos metodos
	}
}

$animal = new Cavalo();
$animal->Andar();