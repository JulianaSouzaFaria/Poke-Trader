<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Poke Trader</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="public/estilo.css">

  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo" crossorigin="anonymous"></script>
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script src="public/script.js"></script>
  
</head>

<body>
 <div class="caixa1">
  <div class="titulo">
    <span class="centralizar">Poke Trader | Calcule se é justo trocar seu Pokemon</span>
  </div>
</div>

<div class="conteudo">  

  <h3 style="text-align: center">Regras do Jogo:</h3>
  <p style="text-align: center">
    Você pode simular a troca dos seus Pokemons!
    <br><br>
    No lado A, digite nos cards os Pokemons que deseja oferecer (no máximo 6!)
    <br>
    No lado B, digite os Pokemons que deseja ter!
    <br><br>
    O cálculo será feito baseado na força de cada Pokemón e a troca
    <br>é considerada justa se tiver uma diferença de até 10% entre os valores!
    <br>
    Mesmo não sendo justa, você pode optar por fazer a troca.
    <br><br>
    Bora lá! Boas negociações!     
  </p>
</div>

<div class="caixa2">
</div>

<div class="conteudo">
  <!-- LADO A -->
  <form action="troca_controller.php?acao=inserir" method="post" onsubmit="return habilitarCampos()">

    <div class="row">
      <div class="col-md-6">

        <div class="form-group card-body font-weight-bold text-center" style="border: 1px solid #434D6B; background-color: #F1F5F8">

          <label for="jog1">Lado A: Pokemons ofertados (máximo 6)</label>

          <div class="card">
            <input type="text" name="pok1name[]" class="form-control pokload" id="pok11" placeholder="Digite nome Pokemon" onKeypress="return apenasLetras(event)">
            <div class="ambienteImagem"><img id="pok11Imagem" class="sprites"></div>
            <input id="pok11Base" name="pokemonLadoA[]" class="pokemonBaseExperience" type="number" disabled="disabled" placeholder="Força:">
          </div>

          <div class="card">
            <input type="text" name="pok1name[]" class="form-control pokload" id="pok12" placeholder="Digite nome Pokemon" onKeypress="return apenasLetras(event)">
            <div class="ambienteImagem"><img id="pok12Imagem" class="sprites"></div>
            <input id="pok12Base" name="pokemonLadoA[]" class="pokemonBaseExperience" type="number" disabled="disabled" placeholder="Força:">
          </div>

          <div class="card">
            <input type="text" name="pok1name[]" class="form-control pokload" id="pok13" placeholder="Digite nome Pokemon" onKeypress="return apenasLetras(event)">
            <div class="ambienteImagem"><img id="pok13Imagem" class="sprites"></div>
            <input id="pok13Base" name="pokemonLadoA[]" class="pokemonBaseExperience" type="number" disabled="disabled" placeholder="Força:">
          </div>

          <div class="card">
            <input type="text" name="pok1name[]" class="form-control pokload" id="pok14" placeholder="Digite nome Pokemon" onKeypress="return apenasLetras(event)">
            <div class="ambienteImagem"><img id="pok14Imagem" class="sprites"></div>
            <input id="pok14Base" name="pokemonLadoA[]" class="pokemonBaseExperience" type="number" disabled="disabled" placeholder="Força:">
          </div>

          <div class="card">
            <input type="text" name="pok1name[]" class="form-control pokload" id="pok15" placeholder="Digite nome Pokemon" onKeypress="return apenasLetras(event)">
            <div class="ambienteImagem"><img id="pok15Imagem" class="sprites"></div>
            <input id="pok15Base" name="pokemonLadoA[]" class="pokemonBaseExperience" type="number" disabled="disabled" placeholder="Força:">
          </div>

          <div class="card">
            <input type="text" name="pok1name[]" class="form-control pokload" id="pok16" placeholder="Digite nome Pokemon" onKeypress="return apenasLetras(event)">
            <div class="ambienteImagem"><img id="pok16Imagem" class="sprites"></div>
            <input id="pok16Base" name="pokemonLadoA[]" class="pokemonBaseExperience" type="number" disabled="disabled" placeholder="Força:">
          </div>
          
          <input type="number" class="form-control " name="resultado1" id="resultado1" readonly placeholder="Total =" style="background-color:#D0D5D1">        

        </div>            
        
      </div>

      <!-- LADO B -->
      <div class="col-md-6">   

        <div class="form-group card-body font-weight-bold text-center" style="border: 1px solid #434D6B; background-color: #F1F5F8">

          <label for="jog2">Lado B: Pokemons requeridos</label>

          <div class="card">
            <input type="text" name="pok2name[]" class="form-control pokload" id="pok21" placeholder="Digite nome Pokemon" onKeypress="return apenasLetras(event)">
            <div class="ambienteImagem"><img id="pok21Imagem" class="sprites"></div>
            <input id="pok21Base" name="pokemonLadoB[]" class="pokemonBaseExperience" type="number" disabled="disabled" placeholder="Força:">
          </div>

          <div class="card">
            <input type="text" name="pok2name[]" class="form-control pokload" id="pok22" placeholder="Digite nome Pokemon" onKeypress="return apenasLetras(event)">
            <div class="ambienteImagem"><img id="pok22Imagem" class="sprites"></div>
            <input id="pok22Base" name="pokemonLadoB[]" class="pokemonBaseExperience" type="number" disabled="disabled" placeholder="Força:">
          </div>

          <div class="card">
            <input type="text" name="pok2name[]" class="form-control pokload" id="pok23" placeholder="Digite nome Pokemon" onKeypress="return apenasLetras(event)">
            <div class="ambienteImagem"><img id="pok23Imagem" class="sprites"></div>
            <input id="pok23Base" name="pokemonLadoB[]" class="pokemonBaseExperience" type="number" disabled="disabled" placeholder="Força:">
          </div>

          <div class="card">
            <input type="text" name="pok2name[]" class="form-control pokload" id="pok24" placeholder="Digite nome Pokemon" onKeypress="return apenasLetras(event)">
            <div class="ambienteImagem"><img id="pok24Imagem" class="sprites"></div>
            <input id="pok24Base" name="pokemonLadoB[]" class="pokemonBaseExperience" type="number" disabled="disabled" placeholder="Força:">
          </div>

          <div class="card">
            <input type="text" name="pok2name[]" class="form-control pokload" id="pok25" placeholder="Digite nome Pokemon" onKeypress="return apenasLetras(event)">
            <div class="ambienteImagem"><img id="pok25Imagem" class="sprites"></div>
            <input id="pok25Base" name="pokemonLadoB[]" class="pokemonBaseExperience" type="number" disabled="disabled" placeholder="Força:">
          </div>

          <div class="card">
            <input type="text" name="pok2name[]" class="form-control pokload" id="pok26" placeholder="Digite nome Pokemon" onKeypress="return apenasLetras(event)">
            <div class="ambienteImagem"><img id="pok26Imagem" class="sprites"></div>
            
            <input id="pok26Base" name="pokemonLadoB[]" class="pokemonBaseExperience" type="number" disabled="disabled" placeholder="Força:">
          </div>

          <input type="number" class="form-control" name="resultado2" id="resultado2" readonly placeholder="Total =" value="" style="background-color:#D0D5D1">

        </div>
        
      </div>    

      <div class="col text-center">

        <!--chamada da função valorPokemon() ao clicar no botao Calcular -->
        
        <input type="button" class="btn-secondary btn-lg" name="resultadoPokemon" value="Calcular" style="padding: 5px; margin-top: 10px; width: 200px">
        
        <br><br>

        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text">Resultado...</span>
          </div>
          <input type="text" class="form-control" disabled="disabled" name="texto" id="texto" value="" >
        </div>
        
        <br>
        
        <input type="submit" name="trocaPokemon" class="btn btn-secondary mr-2 " value="Clique para trocar o seu Pokemon">        
        <input type="submit" name="trocaPokemon" class="btn btn-success ml-2 " value="Clique para ver o histórico" formaction="historico.php">
        
        <br><br>
        
      </div>
    </div>
  </form>
</div>

<div class="caixa3">
</div>

<div class="conteudo" style="text-align: center">      
  <p>
    Este foi um desafio proposto no processo seletivo da bxblue!
    <br>
    Tudo foi feito com muito esforço, dedicação e pesquisas,
    <br>entrego aqui o que tenho de melhor nos limites dos meus conhecimentos!     
  </p>
  <span> 2021 bxblue Poke Trader - Juliana Faria</span>
</div>

</body>
</html>