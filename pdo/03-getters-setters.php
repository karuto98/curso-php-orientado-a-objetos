<?php 
//aula 03

class Login{
	private $email;
	private $senha;

	//getters
	public function getEmail(){
		return $this->email;
	}
	public function getSenha(){
		return $this->senha;
	}

	//setters
	public function setEmail($e){
		$email = filter_var($e,FILTER_SANITIZE_EMAIL);
		$this->email = $email;
	}
	public function setSenha($s){
		$this->senha = $s;
	}

	//loga
	public function Logar(){
		if($this->email == "teste@teste.com" and $this->senha == "123456"){
			echo "logado com sucesso";
		} else {
			echo "logado errado";
		}
	}
}

$logar = new Login();

//seta email e senha
$logar->setEmail("teste@teste.com");
$logar->setSenha("123456");

/////////////////////
echo "<hr>";
/////////////////////

//pega email e senha
echo $logar->getEmail();
echo $logar->getSenha();

$logar->Logar();