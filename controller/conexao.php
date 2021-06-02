<?php
//pagina criada para conectar com banco de dados

$pdo = new PDO("pgsql:" . sprintf(
    "host=%s;port=%s;user=%s;password=%s;dbname=%s",
    $db["host"],"ec2-3-234-22-132.compute-1.amazonaws.com"
    $db["port"],"5432"
    $db["user"],"yteemapwrjznlo"
    $db["pass"],"ae7641251938d5855765767517ce583a1fa3c758f11769efd6e571bdfafbc374
"
    ltrim($db["path"], "/")
));



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