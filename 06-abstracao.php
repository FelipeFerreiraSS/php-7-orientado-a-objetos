<?php

// abstract -> serve como "modelo" para as class que extenderem(extends)

abstract class Banco {
	protected $saldo;
	protected $limiteSaque;
	protected $juros;

	abstract protected function Sacar();

	abstract protected function Depositar();
}

class Itau extends Banco {
	public function Sacar() {
		echo "Sacou";
	}

	public function Depositar() {
		echo "Depositou";
	}
}

class Bradesco extends Banco {
	public function Sacar() {
		echo "Sacou";
	}

	public function Depositar() {
		echo "Depositou";
	}
}

$itau = new Itau();