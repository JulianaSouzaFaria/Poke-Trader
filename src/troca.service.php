<?php

class TrocaService{

	private $conexao;
	private $troca;
	private $tabela;

	public function __construct(Conexao $conexao, Troca $troca, $tabela = "public.troca_pokemon") 
	{
		$this->conexao = $conexao->conectar();
		$this->troca = $troca;
		$this->tabela = $tabela;
	}

	public function inserir()
	{
		$query = 'insert into '.$this->tabela.'(nome_pokemon,base_experience,data_cadastro)values(:nome_pokemon,:base_experience,NOW())';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':base_experience', $this->troca->__get('base_experience'));
		$stmt->bindValue(':nome_pokemon', $this->troca->__get('nome_pokemon'));
		$stmt->execute();
	}

	public function recuperar()	
	{
		$query = 'select troca, nome_pokemon, base_experience, data_cadastro from '.$this->tabela;
		$stmt = $this->conexao->prepare($query);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_OBJ);
	}
}
?>