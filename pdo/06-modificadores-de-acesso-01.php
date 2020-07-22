<?php  //aula 06
/*
public = acessivel para todos que quiserem acessa-lo

protected = visibilidade protegida, mas todos os herdeiros podem ver suas propriedades ou metodos 

private - acessivel somente pela class que a declarou
*/

class class_de_teste{
	public $var_publica;
	protected $var_protegida;
	private $var_privada;

	//protected somente acesivel aqui e classes herdeiras com o $this, para acessa-la fora use get/set

	//private somente acessivel aqui, para usa-la fora use get/set
}

$class_teste = new class_de_teste();

$class_teste->var_publica = "variavel publica";
echo $class_teste->var_publica;
