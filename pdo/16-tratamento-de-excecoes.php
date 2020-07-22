<?php
// ocorrencia anormal que afecta o funcionamento de aplicação
//Exception é a classe base para todos Exceptions
//mensagem, code, file, line

class NewsLetter {
	public function cadastrarEmail($email){

		if(!filter_var($email, FILTER_VALIDADE_EMAIL)){
			throw new Exception("este email e invalido",1);
		} else {
			echo "email cadastrado";
		}
	}
}

$NewsLetter = new NewsLetter();

try{
$NewsLetter->cadastrarEmail("contato@");
} catch( Exception $e ) {
	echo "mensagem: " .$e->getMessage()."<br>":
	echo "codigo: " .$e->getCode()."<br>":
	echo "linha: " .$e->getLine()."<br>":
	echo "arquivo: " .$e->getFile()."<br>":
}