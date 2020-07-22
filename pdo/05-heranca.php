<?php 
//aula 05

class Veiculo{ //recomendado ficar em arquivo separado
	public $modelo;
	public $cor;
	public $ano;

	public function Andar(){
		echo "Andou";
	}

	public function Parar(){
		echo "Parou";
	}
}


class Carro extends Veiculo{
	public function ligarLimpador(){
		echo "limpando 3..2..1";
	}	
}
class Moto extends Veiculo{
	public function cortarDeGiro(){
		echo "bolololo";
	}	
}

$carro = new Carro();

$carro->modelo = "gol";
$carro->cor = "verde";
$carro->ano = "2020";

$carro->ligarLimpador();
$carro->Andar();

var_dump($carro);

//////////////////////////////
echo "<hr>";
//////////////////////////////

$moto = new Moto();

$moto->modelo = "Honda biz";
$moto->cor = "cinza";
$moto->ano = "2018";

$moto->cortarDeGiro();
$moto->Parou();