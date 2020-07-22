<?php 
//aula 09
class Pessoa{
	const name = "Rodrigo";

	public function exibirNome(){
		//para referenciar a const dentro da class
		echo self::nome;
	}
}

$pessoa = new Pessoa();
$pessoa->exibirNome();;//exibe rodrigo

class Rodrigo extends Pessoa{
	const nome = "oliveira";
	public function exibirNome(){
		echo self::nome;//oliveira
		echo parent::nome;//rodrigo
	}

$rodrigo = new Pessoa();
$rodrigo->exibirNome();//exibe oliveira