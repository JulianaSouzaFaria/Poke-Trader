$(document).ready(function()
{
 
  //Atribue aos campos de código do Pokemon a função que carrega os dados dos pokemons:
  $("#pok11").focusout(function(){
    carregarPokemon("pok11");
  });
  $("#pok12").focusout(function(){
    carregarPokemon("pok12");
  });
  $("#pok13").focusout(function(){
    carregarPokemon("pok13");
  });
  $("#pok14").focusout(function(){
    carregarPokemon("pok14");
  });
  $("#pok15").focusout(function(){
    carregarPokemon("pok15");
  });
  $("#pok16").focusout(function(){
    carregarPokemon("pok16");
  });
  $("#pok21").focusout(function(){
    carregarPokemon("pok21");
  });
  $("#pok22").focusout(function(){
    carregarPokemon("pok22");
  });
  $("#pok23").focusout(function(){
    carregarPokemon("pok23");
  });
  $("#pok24").focusout(function(){
    carregarPokemon("pok24");
  });
  $("#pok25").focusout(function(){
    carregarPokemon("pok25");
  });
  $("#pok26").focusout(function(){
    carregarPokemon("pok26");
  });

  //Cria uma função de verificação se a troca é justa ou não:
  $('input[name="resultadoPokemon"]').click(function()
  {
    let diferencaMaxima = 2; //Regra definida para determinar se a troca é justa ou não.
 
    //Carrega a soma dos lados:
    let soma1 = parseInt($("#resultado1").val(), 10) || 0;
    let soma2 = parseInt($("#resultado2").val(), 10) || 0;
    
    if(Math.abs(soma1 - soma2) <= diferencaMaxima) //Regra definida para determinar se a troca é justa ou não.
    {
      document.getElementById("texto").value = "Essa troca é justa!";
    } 
    else 
    {
      document.getElementById("texto").value = "Essa troca NÃO é justa, mas ainda assim você pode optar por trocar seu Pokemon!";
    }
  });

});

//Carregas os dados de um Pokemon da API informado por número:
function carregarPokemon(nomeCampo)
{
  var pokemon = $("#"+nomeCampo).val();
  var pokemonAPIURL="";
  if(pokemon!=="")
  {
    pokemonAPIURL = "https://pokeapi.co/api/v2/pokemon/"+pokemon+"/";

    $.ajax({
    url: pokemonAPIURL,
    type: 'GET',
    dataType: 'json',
    success: function(data) 
            {
              //console.log("GetPoke by ID");
              //console.log(data);
              $("#"+nomeCampo+"name").val(data.name);
              $("#"+nomeCampo+"base").val(data.base_experience);
              somaLados();
            }
    });
  }
}

//Faz todo o somatório:
function somaLados()
{
  //Soma lado A:
  var total_lado_a = 0;
  var x = document.getElementsByName("pok1[]");
  for (var i = 0; i < x.length; i++) 
  {      
    total_lado_a += parseInt(x[i].value, 10) || 0;
  }
  $("#resultado1").val(total_lado_a);

  //Soma lado B:
  var total_lado_b = 0;
  var x = document.getElementsByName("pok2[]");
  for (var i = 0; i < x.length; i++) 
  {      
    total_lado_b += parseInt(x[i].value, 10) || 0;
  }
  $("#resultado2").val(total_lado_b);
}

//Habilita os campos para fazer a gravação das informações:
function habilitarCampos()
{
  var x = document.getElementsByName("pok1[]");
  var y = document.getElementsByName("pok1name[]");
  for (var i = 0; i < x.length; i++) 
  {      
    if(x[i].value !="")
    {
      x[i].disabled = false;
      y[i].disabled = false;
    }
  }

  var x = document.getElementsByName("pok2[]");
  var y = document.getElementsByName("pok2name[]");
  for (var i = 0; i < x.length; i++) 
  {      
    if(x[i].value !="")
    {
      x[i].disabled = false;
      y[i].disabled = false;
    }
  }
  return true;
}

