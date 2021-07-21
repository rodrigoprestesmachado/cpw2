<!-- .slide:  data-background-opacity="0.1" data-background-image="https://miro.medium.com/max/1800/1*6ahbWjp_g9hqhaTDSJOL1Q.png" 
data-transition="convex"  -->
# Eventos
<!-- .element: style="margin-bottom:100px; font-size: 60px; color:F5F5F5; font-family: Marker Felt;" -->

Pressione 'F' para tela cheia
<!-- .element: style="font-size: small; color:white" -->

[versão em pdf](?print-pdf)
<!-- .element: style="font-size: small;" -->


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
## O que são eventos?
<!-- .element: style="margin-bottom:50px; font-size: 40px; font-family: Marker Felt;" -->

* Os eventos são são ações que acontecem nos elementos de uma página
<!-- .element: style="margin-bottom:55px; font-size: 25px; font-family: arial; color:#EDEEEC" -->

* Quando utilizados JS em uma página podemos "reagir/tratar" a esses eventos
<!-- .element: style="margin-bottom:55px; font-size: 25px; font-family: arial; color:#EDEEEC" -->

* Existem muitos tipos de [eventos do HTML](https://www.w3schools.com/tags/ref_eventattributes.asp)
<!-- .element: style="margin-bottom:55px; font-size: 25px; font-family: arial; color:#EDEEEC" -->


<!-- .slide: data-background="#F5F5F5" data-transition="zoom" -->
## Eventos comuns
<!-- .element: style="margin-bottom:50px; font-size: 40px; font-family: Marker Felt;" -->

| Evento      | Descrição                                                   |
| ----------- | ----------------------------------------------------------- |
| onchange    | Um elemento HTML foi alterado                               |
| onclick     | O usuário clicou num elemento do HTML                       |
| onmouseover | O usuário passou com o _mouse_ por cima de um elemento HTML |
| onmouseout  | O usuário moveu o mouse para fora de um elemento HTML       |
| onkeydown   | Uma tecla foi pressionada                                   |
| onload      | O navegador terminou de carregar uma página                 |


<!-- .slide: data-background="#4AA791" data-transition="zoom" -->
## Exemplo
<!-- .element: style="margin-bottom:50px; font-size: 40px; font-family: Marker Felt;" -->

<iframe width="100%" height="300" src="//jsfiddle.net/prestesmachado/wzL73kjc/19/embedded/js,html,result/" allowfullscreen="allowfullscreen" allowpaymentrequest frameborder="0"></iframe>


<!-- .slide: data-background="#4AA791" data-transition="zoom" -->
## Exemplo orientado a objetos
<!-- .element: style="margin-bottom:50px; font-size: 40px; font-family: Marker Felt;" -->

<iframe width="100%" height="300" src="//jsfiddle.net/prestesmachado/ofqye9an/13/embedded/js,html,result/" allowfullscreen="allowfullscreen" allowpaymentrequest frameborder="0"></iframe>


<!-- .slide: data-background="#4AA791" data-transition="zoom" -->
## Alguns de Eventos
<!-- .element: style="margin-bottom:50px; font-size: 40px; font-family: Marker Felt;" -->

* onLoad e onUnload
<!-- .element: style="margin-bottom:30px; font-size: 25px; font-family: arial; color:#EDEEEC" -->
  * São eventos que ocorrem geralmente quando um usuário entra ou sai de uma página
  <!-- .element: style="margin-bottom:30px; font-size: 25px; font-family: arial; color:#EDEEEC" -->

* onFocus, onBlur and onChange
<!-- .element: style="margin-bottom:30px; font-size: 25px; font-family: arial; color:#EDEEEC" -->
  * São eventos associados com o tratamento de formulários Web
  <!-- .element: style="margin-bottom:30px; font-size: 25px; font-family: arial; color:#EDEEEC" -->

  * **Nota:** onBlur é um evento que ocorre quando o usuário retira o foco (cursor) de um formulário
  <!-- .element: style="margin-bottom:30px; font-size: 25px; font-family: arial; color:#EDEEEC" --> 

* Exemplo, validando um e-mail:
<!-- .element: style="margin-bottom:30px; font-size: 25px; font-family: arial; color:#EDEEEC" -->

```html
<input type="text" size="30" id="email" onchange="checkEmail()">
```
<!-- .element: style="margin-bottom:50px; font-size: 16px; font-family: arial; color:black; background-color: #F2FAF3;" -->


<!-- .slide: data-background="#4AA791" data-transition="zoom" -->
## Alguns de Eventos
<!-- .element: style="margin-bottom:50px; font-size: 40px; font-family: Marker Felt;" -->

* onSubmit
<!-- .element: style="margin-bottom:30px; font-size: 25px; font-family: arial; color:#EDEEEC" -->
  * Evento utilizado para validar todos os dados de um formulário antes do envio para o servidor
  <!-- .element: style="margin-bottom:30px; font-size: 25px; font-family: arial; color:#EDEEEC" -->

  * No exemplo, abaixo a função checkForm será chamada quando um usuário pressionar um botão de envio
  <!-- .element: style="margin-bottom:30px; font-size: 25px; font-family: arial; color:#EDEEEC" -->

  * A função checkForm retorna true ou false. O valor true é retornado se os campos foram validados corretamente
  <!-- .element: style="margin-bottom:30px; font-size: 25px; font-family: arial; color:#EDEEEC" -->

```html
<form method="post"
      action="pagina.php"
      onsubmit="return checkForm()">

```
<!-- .element: style="margin-bottom:50px; font-size: 16px; font-family: arial; color:black; background-color: #F2FAF3;" -->


<!-- .slide: data-background="#4AA791" data-transition="zoom" -->
## Alguns de Eventos
<!-- .element: style="margin-bottom:50px; font-size: 40px; font-family: Marker Felt;" -->

* onMouseOver e onMouseOut
<!-- .element: style="margin-bottom:30px; font-size: 25px; font-family: arial; color:#EDEEEC" -->
  * Eventos associados com o posicionamento do mouse
  <!-- .element: style="margin-bottom:30px; font-size: 25px; font-family: arial; color:#EDEEEC" -->

* Exemplo:
<!-- .element: style="margin-bottom:30px; font-size: 25px; font-family: arial; color:#EDEEEC" -->

```html
<a href="http://www.w3schools.com" onmouseover="alert('onMouseOver'); return false">
    <img src="w3s.gif" 
    alt="W3Schools" />
</a>
```
<!-- .element: style="margin-bottom:50px; font-size: 16px; font-family: arial; color:black; background-color: #F2FAF3;" -->


<!-- .slide: data-background="#4AA791" data-transition="zoom" -->
# Referências 📚
<!-- .element: style="margin-bottom:50px; font-size: 50px; color:2B2625; font-family: Marker Felt;" -->

* MDN [JavaScript basics](https://developer.mozilla.org/en-US/docs/Learn/Getting_started_with_the_web/JavaScript_basics)
<!-- .element: style="margin-bottom:40px; font-size: 20px; color:white; font-family: arial;" -->

* Tutorial de [JavaScript](http://www.w3schools.com/js) do W3C
<!-- .element: style="margin-bottom:40px; font-size: 20px; color:white; font-family: arial;" -->

* MILETTO, Evandro Manara. [Desenvolvimento de software II: introdução ao desenvolvimento web com html, css, javascript e php](https://biblioteca.ifrs.edu.br/pergamum_ifrs/biblioteca_s/acesso_login.php?cod_acervo_acessibilidade=5020682&acesso=aHR0cHM6Ly9pbnRlZ3JhZGEubWluaGFiaWJsaW90ZWNhLmNvbS5ici9ib29rcy85Nzg4NTgyNjAxOTY5&label=acesso%20restrito). Porto Alegre Bookman 2014 1 recurso online ISBN 9788582601969.
<!-- .element: style="margin-bottom:40px; font-size: 20px; color:white; font-family: arial;" -->

<center>
<a href="https://github.com/rodrigoprestesmachado" target="blanck"><img src="../../imgs/logo.png" alt="Rodrigo Prestes Machado" width="3%" height="3%" border=0 style="border:0; text-decoration:none; outline:none"></a><br/>
<a rel="license" href="http://creativecommons.org/licenses/by/4.0/">Creative Commons Atribuição 4.0 Internacional</a>