<?php

require_once 'vendor/autoload.php';

$produto = new \app\model\Produto();
$produto->setId(2);
$produto->setNome('Notebook Acer');
$produto->setDescricao('i9, 32gb');

$produtoDao = new \app\model\produtoDao();
$produtoDao->update($produto);
$produtoDao->read($produto);

foreach ($produtoDao->read() as $produto):
	echo $produto['nome']."<br>".$produto['descricao']."<hr>";
endforeach;