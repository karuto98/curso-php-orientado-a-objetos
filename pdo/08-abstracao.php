<?php 
//aula 08

abstract class Banco{ //impossivel de ser instanciada
	protected $saldo;
	protected $limiteSaque
	protected $juros;

	//obriga ser declaradis
	abstract protected function Sacar();
	abstract protected function Depositar();
}

class Itau extends Banco{
	public function Sacar(){
		echo "sacar";
	}
	public function Depositar(){
		echo "depositar";
	}
}


$itau = new Itau();
