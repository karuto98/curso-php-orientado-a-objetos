<?php
//aula 02

//classe
class Pessoa {

	//atributos
	public $nome;
	public $idade;

	//metodos ou funções
	public function Falar(){
		echo $this->nome. " " .$this->idade;
	}
}

$rodrigo = new Pessoa();
$rodrigo->Falar();
$rodrigo->nome = 'rodrigo';
$rodrigo->idade = '28';

var_dump($rodrigo);