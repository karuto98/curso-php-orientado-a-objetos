<?php 
require 'classes/produto.php';
require 'models/produto.php';

$produto = new \classes\ Produto();
$produto->mostrarDetalhes();

/////////////////////////
echo "<hr>";
/////////////////////////

use models\produto() as productModel;
 
$produto = new productModel();
$produto->mostrarDetalhes();