<?php

// Agregação
// Na agregação, um class precisa da outra para sua ação, uma class utiliza a outra como class de si propria

class Produtos {
	public $nome;
	public $valor;

	function __construct($nome, $valor) {
		$this->nome = $nome;
		$this->valor = $valor;
	}
}

class Carrinho {
	public $produtos;

	public function adiciona(Produtos $produto) {
		$this->produtos[] = $produto;
	}

	public function exibe() {
		foreach ($this->produtos as $produto) {
			echo $produto->nome."<br>";
			echo $produto->valor."<br>";
		}
	}
}

$produto1 = new Produtos("Computador", "2000");
$produto2 = new Produtos("Teclado", "150");

$carrinho = new Carrinho();
$carrinho->adiciona($produto1);
$carrinho->adiciona($produto2);

$carrinho->exibe();

