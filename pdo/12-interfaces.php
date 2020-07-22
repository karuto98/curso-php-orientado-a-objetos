<?php
//aula 11
interface Crud{
	//quem a implementa é obrigado a criar-la
	public function create();
	public function read();
	public function update();
	public function delete();
}

class Noticias implements Crud{

	public function create(){
		//logica 
	}
	public function read(){
		//logica
	}
	public function update(){
		//logica
	}
	public function delete(){
		//logica
	}
}