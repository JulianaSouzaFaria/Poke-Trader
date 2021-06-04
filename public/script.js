

$(document).ready(function(){

  //Todos os elementos cujo o atributo classe contenha a classe pokload adiciona o listener.
  $(".pokload").focusout(function() {
    carregarPokemon(this.id);
  });


//Cria uma função de verificação se a troca é justa ou não:
$('input[name="resultadoPokemon"]').click(function()
{

    //Diferenca Maxima = 10%

    //Carrega a soma dos lados:
    let soma1 = parseInt($("#resultado1").val(), 10) || 0;
    let soma2 = parseInt($("#resultado2").val(), 10) || 0;

    let x = (Math.abs(soma1 + soma2) * 10 / 100)
    
    if(Math.abs(soma1 - soma2) >= x) //Regra definida para determinar se a troca é justa ou não.
    {
      document.getElementById("texto").value = "Essa troca NÃO é justa, mas ainda assim você pode optar por trocar seu Pokemon!";
    } 
    else 
    {
      document.getElementById("texto").value = "Essa troca é justa!";
    }
  });
});


//Carregas os dados de um Pokemon da API informado por nome:
function carregarPokemon(idCampo)
{
  let pokemon = $("#"+idCampo).val();
  let pokemonAPIURL="";
  if(pokemon!=="")
  {
    pokemonAPIURL = "https://pokeapi.co/api/v2/pokemon/"+pokemon+"/";
    
    $.ajax({
      url: pokemonAPIURL,
      type: 'GET',
      dataType: 'json',
      success: function(data) 
      {            

              //buscando URL da imagem desse Pokemon
              let imgUrl = data["sprites"]["front_default"];
              //carregando imagem no card
              $("#" + idCampo + "Imagem").attr("src", imgUrl);

              //buscando base_experience desse Pokemon
              $("#"+idCampo+"Base").val(data.base_experience);

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
  var x = document.getElementsByName("pokemonLadoA[]");
  for (var i = 0; i < x.length; i++) 
  {      
    total_lado_a += parseInt(x[i].value, 10) || 0;
  }
  $("#resultado1").val(total_lado_a);

  //Soma lado B:
  var total_lado_b = 0;
  var x = document.getElementsByName("pokemonLadoB[]");
  for (var i = 0; i < x.length; i++) 
  {      
    total_lado_b += parseInt(x[i].value, 10) || 0;
  }
  $("#resultado2").val(total_lado_b);
}

//Habilita os campos para fazer a gravação das informações:
function habilitarCampos()
{
  var x = document.getElementsByName("pokemonLadoA[]");
  var y = document.getElementsByName("pok1name[]");
  for (var i = 0; i < x.length; i++) 
  {      
    if(x[i].value !="")
    {
      x[i].disabled = false;
      y[i].disabled = false;
    }
  }

  var x = document.getElementsByName("pokemonLadoB[]");
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


function apenasLetras(e){
  var expressao = /[0-9]/;

  if(expressao.test(String.fromCharCode(e.keyCode)))
  {
    return false;
  }
  else
  {
    return true;
  }
}

