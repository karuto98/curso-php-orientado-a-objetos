<?php 
//aula 04 

class Login{
	private $email;

	//contrutores
	public function __construct($email){
		$this->setEmail($email);
	}

	//gettes
	public function getEmail(){
		return $this->email;
	}

	//setters
	public function setEmail($e){
		$email = filter_var($e,FILTER_SANITIZE_EMAIL);
		$this->email = $email;
	}

	//logar
	public function Logar(){
		if($this->email == "teste@teste.com"){
			echo "email certo";
		} else {
			echo "email errado";
		}
	}
}
//passa info para contruct
$logar = new Login('teste@teste.com');
$logar->Logar();