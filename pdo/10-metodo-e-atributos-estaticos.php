<?php
//aula 10 

class Login {
	public static $user;

	public static function 	verificaLogin(){
		//$this nao funciona
		echo "o ".self::user." esta logado";
	}
}

Login::$user = "admin";
Login::verificaLogin();