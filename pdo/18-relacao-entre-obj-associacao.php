<?php
//Associação
//relação entre os objetos (Associação)

class Pedido {
	public $numero;
	public $cliente;
}

class Cliente{
	public $nome;
	public $endereco;
}

$cliente = new Cliente();
$cliente->nome = "Rodrigo";
$cliente->endereco = "rua xx, numero: 177";

$pedido = new Pedido();
$pedido->numero = "01";
$pedido->cliente = $cliente;

$dados = array(
	'numero' => $pedido->numero,
	'nome_cliente' =>$pedido->cliente->nome,
	'endereco_cliente' => $pedido->cliente->endereco
);

var_dump($dados);