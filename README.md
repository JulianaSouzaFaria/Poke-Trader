# Poke-Trader


Quer trocar seu Pokémon, mas ainda não sabe se vale a pena? Esse é um aplicativo que te ajuda nessa decisão. 

O cálculo é feito baseado na base_experience de cada Pokémon. Você pode ofertar até 6 Pokémons. 
A diferença de valores não pode ultrapassar 10%, para ser uma troca justa.
Mas, mesmo que ultrapasse, o app irá avisar que não é uma troca justa e deixa a decisão por sua conta. Quem sabe você quer fazer uma caridade! 😊

As informações sobre a experiência básica para cada Pokémon foram coletadas na API pública https://pokeapi.co/docs/v2   

## Desenvolvimento
Em index.php está todo o corpo da página inicial.
Uma página básica, com poucas imagens, efeito css, formulário simples e ajustes com bootstrap.
no campo de cada jogador, existem 6 cards vazios que para preencher basta inserir o nome do Pokémon. Automaticamente teremos a resposta da força base do elemento.
O app soma e calcula a diferença de cada jogador, apontando se a troca é justa ou não.

Para efetuar a troca é preciso clicar no botão "Clique para trocar seu Pokémon". Você será redirecionado para a página histórico.php
O botão "Clique para ver o histórico" redireciona para a mesma página, porém apenas para visualização.

Em histórico.php temos a página que apresenta uma visualização renderizada do nosso Banco de Dados, com todas as trocas já efetuadas.

Script.js abriga todas as funções necessárias para o app funcionar, como cálculos, atribuir valores, carregar dados da API e restringir escritas.

Conexao.php fica responsável pela conexão com o banco de dados

Troca.model.php consta quais elementos serão gravados na troca

Troca.service.php tem os atributos privados análogos às tabelas do Banco de Dados. Com os métodos públicos conseguimos manipular os atributos privados

Troca.controller.php recebe todos os dados protegidos e insere no Banco de Dados

Para visualizar, o app está em https://poke-trader-bxblue.herokuapp.com/
