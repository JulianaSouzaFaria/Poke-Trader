<?php

class Troca{
	private $id;
	private $nome_pokemon;
	private $pok2;
	private $data_cadastro;

	public function __get($atributo){
		return $this->$atributo;
	}

	public function __set($atributo, $valor){
		$this->$atributo = $valor;
	}
}

?>