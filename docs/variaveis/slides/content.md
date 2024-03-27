<!-- .slide:  data-background-opacity="0.3" data-background-image="imgs/title.jpg" data-transition="convex"  -->
# Variáveis
<!-- .element: style="margin-bottom:100px; font-size: 50px; color:white; font-family: Marker Felt;" -->

Pressione 'F' para tela cheia
<!-- .element: style="font-size: small; color:white;" -->

[versão em pdf](?print-pdf)
<!-- .element: style="font-size: small;" -->


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
## Variáveis 🗃️
<!-- .element: style="margin-bottom:50px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

* JS é uma linguagem *case-sensitive* (a e A são variáveis diferentes)
<!-- .element: style="margin-bottom:60px; font-size: 30px; font-family: arial; color:#F5F5F5" -->

* Variáveis necessitam iniciar com uma letra ou um underscore
<!-- .element: style="margin-bottom:60px; font-size: 30px; font-family: arial; color:#F5F5F5" -->

* Podemos declarar uma variável com as palavras chaves `var`, `let` e `const`
<!-- .element: style="margin-bottom:60px; font-size: 30px; font-family: arial; color:#F5F5F5" -->


<!-- .slide: data-background="#4AA791" data-transition="concave"  -->
## var
<!-- .element: style="margin-bottom:50px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

Variáveis declaradas com `var` não possuem escopo de bloco
<!-- .element: style="margin-bottom:50px; font-size: 30px; font-family: arial; color:#F5F5F5" -->

<iframe width="100%" height="300" src="//jsfiddle.net/prestesmachado/z9egunav/28/embedded/js,html,css,result/dark/" allowfullscreen="allowfullscreen" allowpaymentrequest frameborder="0"></iframe>


<!-- .slide: data-background="#4AA791" data-transition="concave"  -->
## let
<!-- .element: style="margin-bottom:50px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

A partir do [ECMAScript 2015 - ES6](https://www.w3schools.com/js/js_es6.asp), variáveis declaradas com `let` passaram a respeitar o escopo de bloco
<!-- .element: style="margin-bottom:50px; font-size: 25px; font-family: arial; color:#F5F5F5" -->

<iframe width="100%" height="300" src="//jsfiddle.net/prestesmachado/ywbjf7gm/9/embedded/js,html,css,result/dark/" allowfullscreen="allowfullscreen" allowpaymentrequest frameborder="0"></iframe>


<!-- .slide: data-background="#4AA791" data-transition="concave"  -->
## const
<!-- .element: style="margin-bottom:50px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

* Variáveis declaradas com `const` funcionam da mesma forma daquelas declaradas com `let`, ou seja, possuem escopo de bloco
<!-- .element: style="margin-bottom:60px; font-size: 25px; font-family: arial; color:#F5F5F5" -->

* Porém, as variáveis declaradas com `const` não podem ter seu valor alterado e necessitam receber seu valor no momento da declaração, por exemplo:
<!-- .element: style="margin-bottom:50px; font-size: 25px; font-family: arial; color:#F5F5F5" -->

```js

const PI = 3.141592653589793;

```
<!-- .element: style="margin-bottom:50px; font-size: 16px; font-family: arial; color:black; background-color: #F2FAF3;" -->


<!-- .slide:  data-background-opacity="0.1" data-background-image="https://miro.medium.com/max/1800/1*6ahbWjp_g9hqhaTDSJOL1Q.png" data-transition="convex"  -->
# Referências 📚
<!-- .element: style="margin-bottom:50px; font-size: 40px; font-family: Marker Felt; color:#F5F5F5" -->

* MDN [JavaScript basics](https://developer.mozilla.org/en-US/docs/Learn/Getting_started_with_the_web/JavaScript_basics)
<!-- .element: style="margin-bottom:50px; font-size: 25px; font-family: arial; color:#F5F5F5" -->

* Tutorial de [JavaScript](http://www.w3schools.com/js) do W3C
<!-- .element: style="margin-bottom:50px; font-size: 25px; font-family: arial; color:#F5F5F5" -->

* MILETTO, Evandro Manara. [Desenvolvimento de software II: introdução ao desenvolvimento web com html, css, javascript e php](https://biblioteca.ifrs.edu.br/pergamum_ifrs/biblioteca_s/acesso_login.php?cod_acervo_acessibilidade=5020682&acesso=aHR0cHM6Ly9pbnRlZ3JhZGEubWluaGFiaWJsaW90ZWNhLmNvbS5ici9ib29rcy85Nzg4NTgyNjAxOTY5&label=acesso%20restrito). Porto Alegre Bookman 2014 1 recurso online ISBN 9788582601969.
<!-- .element: style="margin-bottom:50px; font-size: 25px; font-family: arial; color:#F5F5F5" -->

<center>
<a href="https://rpmhub.dev" target="blanck"><img src="../../imgs/logo.png" alt="Rodrigo Prestes Machado" width="4%" height="4%" border=0 style="border:0; text-decoration:none; outline:none"></a><br/>
<a rel="license" href="http://creativecommons.org/licenses/by/4.0/">CC BY 4.0 DEED</a>
</center>