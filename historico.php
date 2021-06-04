<?php

$acao = 'recuperar';

require 'troca_controller.php';

  //echo '<pre>';
  //print_r($trocas);
  //echo '</pre>';

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Poke Trader</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="public/estilo.css">

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <script src="public/script.js"></script>

</head>

<body>
  <div class="container">  

    <div class="py-5 text-center centralizar">        
      <h2>Acompanhe suas trocas!</h2>
    </div>

    <form>

      <div class="row m-0 p-0" style="border: 1px solid #434D6B">
        <div class="col m-0 p-0">
          <div class="text-center"style="font-family: Road;">        
            <h2>Novos Pokemons:</h2>
          </div>

          <table class="table table-striped">
            <thead class="thead-dark" > 
              <br><br>
              <tr style="background-color: #434D6B; color: white;">
                <td> # </td>
                <td> Nome do Pokemon </td>
                <td> Base Experience </td>
                <td> Data da Troca </td>
              </tr>

              <?php 
              if (is_array($trocas)){
                foreach($trocas as $key => $troca) { 
                  ?>

                  <tr>
                    <td> <?php echo $troca->troca ?> </td>
                    <td> <?php echo $troca->nome_pokemon ?> </td>
                    <td> <?php echo $troca->base_experience ?> </td>
                    <td> <?php echo date("d/m/Y", strtotime($troca->data_cadastro)) ?> </td>
                  </tr>
                  
                <?php }} ?>      

              </thead>                  
            </table>
          </div>
        </div>

        <br><br>

        <div class="row m-0 p-0" style="border: 1px solid #434D6B">
          <div class="col m-0 p-0">
            <div class=" text-center" style="font-family: Road;">        
              <h2>Pokemons Anteriores:</h2>
            </div>

            <table class="table table-striped">
              <thead class="thead-dark" > 
                <br><br>
                <tr style="background-color: #434D6B; color: white;">
                  <td> # </td>
                  <td> Nome do Pokemon </td>
                  <td> Base Experience </td>
                  <td> Data da Troca </td>
                </tr>

                <?php 
                if (is_array($pk_anteriores)){
                  foreach($pk_anteriores as $key => $troca) { 
                    ?>

                    <tr>
                      <td> <?php echo $troca->troca ?> </td>
                      <td> <?php echo $troca->nome_pokemon ?> </td>
                      <td> <?php echo $troca->base_experience ?> </td>
                      <td> <?php echo date("d/m/Y", strtotime($troca->data_cadastro)) ?> </td>
                    </tr>

                  <?php }} ?>      

                </thead>                  
              </table>
            </div>
          </div>

          <div class="row">
            <div class="col py-3 text-center">
              <input type="submit" name="trocaPokemon" class="btn-secondary btn-lg" value="Voltar" formaction="index.php">
            </div>
          </div>

        </form>
      </div>
    </body>
  </html>