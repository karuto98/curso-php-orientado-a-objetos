<?php
//referencia e clonagem de objetos

class Pessoa{
	public $idade;

	public function __clone(){
		//é inicializado quando usa-se a palavra chave clone
		echo "clonegem de obj";
	}	 
}

$pessoa = new Pessoa();
$pessoa->idade = 25;

$pessoa2 = clone $pessoa;
$pessoa2->idade = 35;

//mostra 25 por causa do clone
echo $pessoa->idade;
echo $pessoa2->idade;//35