<?php
//aula 11

class Animal{
	public function Andar(){
		echo "animal andado";
	}
}

class Cavalo extends Animal{

	//rescrever um metodo herdado
	public function Andar(){
		// printa "animal andando"
		$this->Correr(); 
		echo "cavalo andando";
	}
}

$animal = new Cavalo();
$animal->Andar();