<?php

class Conexao {
	public function conectar(){
		try {
			$dsn = "pgsql:host=ec2-18-214-140-149.compute-1.amazonaws.com;port=5432;dbname=d7ds5oehb3onqq;";
			// make a database connection
			$conexao = new PDO($dsn, "ewsbgjzwkuylcr", "8700f4ffd184ca777de83a2cde24ce9111f8c784d23c39dc76adcbefce2fcd44", [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

			if ($conexao) {
				//echo "Connected to the db database successfully!";
				return $conexao;
			}
		} catch (PDOException $e) {
			die($e->getMessage());
		} finally {
			//if ($pdo) {
				//$pdo = null;
			//}
		}
	}
}

?>