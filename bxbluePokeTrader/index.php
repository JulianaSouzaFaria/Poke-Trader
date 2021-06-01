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
    No lado A, coloque todos os que deseja oferecer (no máximo 6!)
    <br>
    No lado B, todos os Pokemons que deseja ter!
    <br><br>
    O cálculo será feito baseado na força de cada Pokemón e a troca
    <br>é considerada justa se tiver uma diferença de até 2 pontos!
    <br><br>
    Bora lá! Boa sorte!     
  </p>
</div>

<div class="caixa2">
</div>

<div class="conteudo">
  <!-- LADO A -->
  <form action="troca_controller.php?acao=inserir" method="post" onsubmit="return habilitarCampos()">
    <div class="row">
      <div class="col-md-6">

        <div class="card-body font-weight-bold text-center" style="border: 1px solid #434D6B">             
          <div class="form-group ladoA">

            <label for="jog1">Lado A: Quero trocar meus Pokemons (máximo 6)</label>
            
            <input type="text" class="form-control" id="pok11" placeholder="Nome do seu Pokemon"  >
            <div class="button floatLeft" >
              <span>Nome:</span><input id="pok11name" name="pok1name[]" class="pokNome" type="text" disabled="disabled">
              <span>Força:</span><input id="pok11base" name="pok1[]" class="pokBase" type="number" disabled="disabled">
              
            </div>
            
            <br>

            <input type="text" class="form-control" id="pok12" placeholder="Nome do seu Pokemon">
            <div class="button floatLeft">
              <span>Nome:</span><input id="pok12name" name="pok1name[]" class="pokNome" type="text" disabled="disabled">
              <span>Força:</span><input id="pok12base" name="pok1[]" class="pokBase" type="number" disabled="disabled">
            </div>

            <br>

            <input type="text" class="form-control" id="pok13" placeholder="Nome do seu Pokemon">
            <div class="button floatLeft">
              <span>Nome:</span><input id="pok13name" name="pok1name[]" class="pokNome" type="text" disabled="disabled">
              <span>Força:</span><input id="pok13base" name="pok1[]" class="pokBase" type="number" disabled="disabled">
            </div>

            <br>

            <input type="text" class="form-control" id="pok14" placeholder="Nome do seu Pokemon">
            <div class="button floatLeft">
              <span>Nome:</span><input id="pok14name" name="pok1name[]" class="pokNome" type="text" disabled="disabled">
              <span>Força:</span><input id="pok14base" name="pok1[]" class="pokBase" type="number" disabled="disabled">
            </div>

            <br>

            <input type="text" class="form-control" id="pok15" placeholder="Nome do seu Pokemon">
            <div class="button floatLeft">
              <span>Nome:</span><input id="pok15name" name="pok1name[]" class="pokNome" type="text" disabled="disabled">
              <span>Força:</span><input id="pok15base" name="pok1[]" class="pokBase" type="number" disabled="disabled">
            </div>

            <br>

            <input type="text" class="form-control" id="pok16" placeholder="Nome do seu Pokemon">
            <div class="button floatLeft">
              <span>Nome:</span><input id="pok16name" name="pok1name[]" class="pokNome" type="text" disabled="disabled">
              <input id="pok16base" name="pok1[]" class="pokBase" type="number" disabled="disabled">
            </div>

            <br>
            
            <input type="number" class="form-control" name="resultado1" id="resultado1" readonly placeholder="Total=">
            
          </div>            
        </div>
      </div>

      <!-- LADO B -->
      <div class="col-md-6">          
        <div class="card-body font-weight-bold text-center" style="border: 1px solid #434D6B">            
          <div class="form-group">
            <label for="jog2">Lado B: Quero esses... Topa?</label>

            <input type="text" class="form-control" id="pok21" placeholder="Nome do seu Pokemon">
            <div class="button floatLeft">
              <span>Nome:</span><input id="pok21name" name="pok2name[]" class="pokNome" type="text" disabled="disabled">
              <span>Força:</span><input id="pok21base" name="pok2[]" class="pokBase" type="number" disabled="disabled">
            </div>

            <br>

            <input type="text" class="form-control" id="pok22" placeholder="Nome do seu Pokemon">
            <div class="button floatLeft">
              <span>Nome:</span><input id="pok22name" name="pok2name[]" class="pokNome" type="text" disabled="disabled">
              <span>Força:</span><input id="pok22base" name="pok2[]" class="pokBase" type="number" disabled="disabled">
            </div>

            <br>

            <input type="text" class="form-control" id="pok23" placeholder="Nome do seu Pokemon">
            <div class="button floatLeft">
              <span>Nome:</span><input id="pok23name" name="pok2name[]" class="pokNome" type="text" disabled="disabled">
              <span>Força:</span><input id="pok23base" name="pok2[]" class="pokBase" type="number" disabled="disabled">
            </div>

            <br>

            <input type="text" class="form-control" id="pok24" placeholder="Nome do seu Pokemon">
            <div class="button floatLeft">
              <span>Nome:</span><input id="pok24name" name="pok2name[]" class="pokNome" type="text" disabled="disabled">
              <span>Força:</span><input id="pok24base" name="pok2[]" class="pokBase" type="number" disabled="disabled">
            </div>

            <br>

            <input type="text" class="form-control" id="pok25" placeholder="Nome do seu Pokemon">
            <div class="button floatLeft">
              <span>Nome:</span><input id="pok25name" name="pok2name[]" class="pokNome" type="text" disabled="disabled">
              <span>Força:</span><input id="pok25base" name="pok2[]" class="pokBase" type="number" disabled="disabled">
            </div>

            <br>

            <input type="text" class="form-control" id="pok26" placeholder="Nome do seu Pokemon">
            <div class="button floatLeft">
              <span>Nome:</span><input id="pok26name" name="pok2name[]" class="pokNome" type="text" disabled="disabled">
              <span>Força:</span><input id="pok26base" name="pok2[]" class="pokBase" type="number" disabled="disabled">
            </div>

            <br>

            <input type="number" class="form-control" name="resultado2" id="resultado2" readonly placeholder="Total=" value="">

          </div>
        </div>
      </div>    

      <div class="col text-center">
        
        <!--chamada da função valorPokemon() ao clicar no botao Calcular -->
        
        <input type="button" class="btn-secondary btn-lg" name="resultadoPokemon" value="Calcular" style="padding: 5px; margin-top: 10px; width: 200px">
        
        <br><br>

        <div >
          <input type="text" name="texto" id="texto" value="" style="width: 1000px; height: 50px; border: 1px solid gray; text-align: center" >
        </div>
        
        <br><br>

        <input type="submit" name="trocaPokemon" class="btn-success btn-lg" value="Clique para trocar o seu Pokemon">

        <br><br>

        <input type="submit" name="trocaPokemon" class="btn-secondary btn-lg" value="Clique para ver o histórico" formaction="historico.php">

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