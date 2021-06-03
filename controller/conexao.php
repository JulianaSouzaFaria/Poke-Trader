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


/*
$db = parse_url(getenv("DATABASE_URL"));
$db["path"] = ltrim($db["path"], "postgresql-rugged-54144");


$pdo = new PDO("pgsql:" . sprintf(
    "host=%s;port=%s;user=%s;password=%s;dbname=%s",
    $db["host"], "ec2-18-214-140-149.compute-1.amazonaws.com"
    $db["port"], "5432"
    $db["user"], "ewsbgjzwkuylcr"
    $db["pass"], "8700f4ffd184ca777de83a2cde24ce9111f8c784d23c39dc76adcbefce2fcd44"
    ltrim($db["path"], "/")
));
*/


?>