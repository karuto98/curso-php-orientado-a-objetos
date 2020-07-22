<?php
// clone     |
// construct |
// invoke
// tostring
// get
// set


class Pessoa{ 
	private $dados = array();

	//set 
	public function __set($nome,$valor){
		$this->dados[$nome] = $valor;
	}

	//get
	public function __get($nome){
		return $this->dados[$nome];
	}

	//to string
	public function __tostring(){
		return "tentei imprimir o obj";		
	}

	//invoke
	public function __invoke(){
		return "obj como funcao";
	}
}

$pessoa = new Pessoa();

//set
$pessoa->nome = "pedro";
$pessoa->idade = 50;
$pessoa->genero = "M";

//get
echo $pessoa->nome ."<br>";
echo $pessoa->idade ."<br>";
echo $pessoa->genero ."<br>";

//to string
echo $pessoa."<br>";
//invoke
echo $pessoa()."<br>";