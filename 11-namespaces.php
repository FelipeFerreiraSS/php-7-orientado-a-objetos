<?php

// Namespaces é utilizado para evitar conflitos emtre arquivos com nomes iguais

require 'classes/produto.php';
require 'models/produto.php';

$produto = new \classes\Produto();
$produto->mostrarDetalhes();

