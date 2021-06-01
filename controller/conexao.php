<?php
//pagina criada para conectar com banco de dados
class Conexao {

	private $host = 'localhost';
	private $dbname = 'bxblue_poke';
	private $user = 'root';
	private $pass = '';

	public function conectar(){
		try{ //dados conexao
			$conexao = new PDO(
				"mysql:host=$this->host;dbname=$this->dbname", //local
				"$this->user", //usuario
				"$this->pass" //senha
			);

			return $conexao;
		} catch (PDOException $e){ //msg caso tenha erro
			echo'<p>'.$e->getMessage().'</p>';
		}
	}
}


?>