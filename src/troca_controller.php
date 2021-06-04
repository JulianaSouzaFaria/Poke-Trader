<?php

	require "troca.model.php";
	require "troca.service.php";
	require "conexao.php";

	
	$acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

	if($acao == 'inserir') 
	{
		$conexao = new Conexao(); //OBS: Fica fora do Loop para não ficar abrindo conexões repetidas do banco de dados e pesando a aplicação.

		$pok2 = array();
		$pok2name = array();
		
		$pok2 = $_POST["pokemonLadoB"];
		$pok2name = $_POST["pok2name"];

		for($i=0; $i < count($pok2); $i++)
		{
			$troca = new Troca();
			$troca->__set('base_experience', $pok2[$i]);
			$troca->__set('nome_pokemon', $pok2name[$i]);

			$trocaService = new TrocaService($conexao, $troca, "troca_pokemon");
			$trocaService->inserir();
		}

		$pok2 = array();
		$pok2name = array();
		
		$pok1 = $_POST["pokemonLadoA"];
		$pok1name = $_POST["pok1name"];

		for($i=0; $i < count($pok1); $i++)
		{
			$troca = new Troca();
			$troca->__set('base_experience', $pok1[$i]);
			$troca->__set('nome_pokemon', $pok1name[$i]);

			$trocaService = new TrocaService($conexao, $troca, "troca_pokemon_anterior");
			$trocaService->inserir();
		}		

		//depois de inserido no BD, redireciona para a pagina
		header('Location: historico.php?inclusao=1');
	} 
	else if($acao == 'recuperar') 
	{
		$troca = new Troca();
		$conexao = new Conexao();

		//Lista os pokemon novos:
		$trocaService = new TrocaService ($conexao, $troca, "troca_pokemon");
		$trocas = $trocaService->recuperar();

		//Lista os pokemons antigos:
		$trocaService = new TrocaService ($conexao, $troca, "troca_pokemon_anterior");
		$pk_anteriores = $trocaService->recuperar();
	}

?>