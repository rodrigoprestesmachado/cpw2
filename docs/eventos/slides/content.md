# Eventos

Pressione 'F' para tela cheia
<!-- .element: style="font-size: small;" -->

[versão em pdf](?print-pdf)
<!-- .element: style="font-size: small;" -->


<!-- .slide: data-background="#F1F1F1" data-transition="zoom" -->
## O que são eventos?

* Os eventos são são ações que acontecem nos elementos de uma página
<!-- .element: style="margin-bottom:50px; font-size: 24px;" -->
* Quando utilizados JS em uma página podemos "reagir/tratar" a esses eventos
<!-- .element: style="margin-bottom:50px; font-size: 24px;" -->
* Existem muitos tipos de [eventos do HTML](https://www.w3schools.com/tags/ref_eventattributes.asp)
<!-- .element: style="margin-bottom:50px; font-size: 24px;" -->


<!-- .slide: data-background="#F1F1F1" data-transition="zoom" -->
## Eventos mais comuns

| Evento      | Descrição                                                   |
| ----------- | ----------------------------------------------------------- |
| onchange    | Um elemento HTML foi alterado                               |
| onclick     | O usuário clicou num elemento do HTML                       |
| onmouseover | O usuário passou com o _mouse_ por cima de um elemento HTML |
| onmouseout  | O usuário moveu o mouse para fora de um elemento HTML       |
| onkeydown   | Uma tecla foi pressionada                                   |
| onload      | O navegador terminou de carregar uma página                 |


<!-- .slide: data-background="#F1F1F1" data-transition="zoom" -->
## Exemplo

<iframe width="100%" height="300" src="//jsfiddle.net/prestesmachado/wzL73kjc/19/embedded/js,html,result/" allowfullscreen="allowfullscreen" allowpaymentrequest frameborder="0"></iframe>


<!-- .slide: data-background="#F1F1F1" data-transition="zoom" -->
## Exemplo orientado a objetos

<iframe width="100%" height="300" src="//jsfiddle.net/prestesmachado/ofqye9an/13/embedded/js,html,result/" allowfullscreen="allowfullscreen" allowpaymentrequest frameborder="0"></iframe>


<!-- .slide: data-background="#F1F1F1" data-transition="zoom" -->
## Alguns de Eventos

* onLoad e onUnload
  * São eventos que ocorrem geralmente quando um usuário entra ou sai de uma página

* onFocus, onBlur and onChange
  * São eventos associados com o tratamento de formulários Web

  * **Nota:** onBlur é um evento que ocorre quando o usuário retira o foco (cursor) de um formulário 

* Exemplo, validando um e-mail:

```html
<input type="text" size="30" id="email" onchange="checkEmail()">
```


<!-- .slide: data-background="#F1F1F1" data-transition="zoom" -->
## Alguns de Eventos

* onSubmit
  * Evento utilizado para validar todos os dados de um formulário antes do envio para o servidor

  * No exemplo, abaixo a função checkForm será chamada quando um usuário pressionar um botão de envio

  * A função checkForm retorna true ou false. O valor true é retornado se os campos foram validados corretamente

```html
<form method="post"
      action="pagina.php"
      onsubmit="return checkForm()">

```


<!-- .slide: data-background="#F1F1F1" data-transition="zoom" -->
## Alguns de Eventos

* onMouseOver e onMouseOut
  * Eventos associados com o posicionamento do mouse

* Exemplo:

```html
<a href="http://www.w3schools.com"
   onmouseover="alert('onMouseOver');return false">

    <img src="w3s.gif" alt="W3Schools" />

</a>
```


# Referências

* Comunidade [Discord](https://discord.com/invite/C29cqvm): canal `#cpw2`

* MDN [JavaScript basics](https://developer.mozilla.org/en-US/docs/Learn/Getting_started_with_the_web/JavaScript_basics)

* Tutorial de [JavaScript](http://www.w3schools.com/js) do W3C

* MILETTO, Evandro Manara. [Desenvolvimento de software II: introdução ao desenvolvimento web com html, css, javascript e php](https://biblioteca.ifrs.edu.br/pergamum_ifrs/biblioteca_s/acesso_login.php?cod_acervo_acessibilidade=5020682&acesso=aHR0cHM6Ly9pbnRlZ3JhZGEubWluaGFiaWJsaW90ZWNhLmNvbS5ici9ib29rcy85Nzg4NTgyNjAxOTY5&label=acesso%20restrito). Porto Alegre Bookman 2014 1 recurso online ISBN 9788582601969.

<center>
<a href="https://github.com/rodrigoprestesmachado" target="blanck"><img src="../../imgs/logo.png" alt="Rodrigo Prestes Machado" width="3%" height="3%" border=0 style="border:0; text-decoration:none; outline:none"></a><br/>
<a rel="license" href="http://creativecommons.org/licenses/by/4.0/">Creative Commons Atribuição 4.0 Internacional</a>