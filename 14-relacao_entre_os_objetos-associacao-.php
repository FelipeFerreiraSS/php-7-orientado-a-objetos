<?php

// Associação
// Acontece quando um objeto "utiliza" outro, porem, sem que eles dependão um do outro

class Pedido {
	public $numero;
	public $cliente;
}

class Cliente {
	public $nome;
	public $endereco;
}

$cliente = new Cliente();
$cliente->nome = "Felipe Ferreira";
$cliente->endereco = "Rua xxx, N°: 200";

$pedido = new Pedido();
$pedido->numero = "123";
$pedido->cliente = $cliente;

$dados = array(

	'numero' => $pedido->numero,
	'nome_cliente' => $pedido->cliente->nome,
	'endereco_cliente' => $pedido->cliente->endereco
);

var_dump($dados);
