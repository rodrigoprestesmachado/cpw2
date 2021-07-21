<!-- .slide:  data-background-opacity="0.1" data-background-image="https://miro.medium.com/max/1800/1*6ahbWjp_g9hqhaTDSJOL1Q.png" 
data-transition="convex"  -->
# Variáveis
<!-- .element: style="margin-bottom:100px; font-size: 50px; color:white; font-family: Marker Felt;" -->

Pressione 'F' para tela cheia
<!-- .element: style="font-size: small; color:white;" -->

[versão em pdf](?print-pdf)
<!-- .element: style="font-size: small;" -->


<!-- .slide: data-background="#F1F1F1" data-transition="concave" -->
## Variáveis

* JS é uma linguagem *case-sensitive* (a e A são variáveis diferentes)
<!-- .element: style="margin-bottom:80px; font-size: 24px;" -->

* Variáveis necessitam iniciar com uma letra ou um underscore
<!-- .element: style="margin-bottom:80px; font-size: 24px;" -->

* Podemos declarar uma variável com as palavras chaves `var`, `let` e `const`
<!-- .element: style="margin-bottom:80px; font-size: 24px;" -->


<!-- .slide: data-background="#F1F1F1" data-transition="concave" -->
## var

<iframe width="100%" height="300" src="//jsfiddle.net/prestesmachado/z9egunav/28/embedded/js,html,result/" allowfullscreen="allowfullscreen" allowpaymentrequest frameborder="0"></iframe>

* Variáveis declaradas com `var` não possuem escopo de bloco `{ }`


<!-- .slide: data-background="#F1F1F1" data-transition="concave" -->
## let

* A partir do [ECMAScript 2015 - ES6](https://www.w3schools.com/js/js_es6.asp), variáveis declaradas com `let` possuem escopo de bloco `{ }`

<iframe width="100%" height="300" src="//jsfiddle.net/prestesmachado/ywbjf7gm/8/embedded/js,html,result/" allowfullscreen="allowfullscreen" allowpaymentrequest frameborder="0"></iframe>


<!-- .slide: data-background="#F1F1F1" data-transition="concave" -->
## const

* Variáveis declaradas com `const` funcionam da mesma forma daquelas declaradas com `let`, ou seja, possuem escopo de bloco

* Porém, as variáveis declaradas com `const` não podem ter seu valor alterado e necessitam receber seu valor no momento da declaração, por exemplo:

```js

const PI = 3.141592653589793;
```


# Referências

* MDN [JavaScript basics](https://developer.mozilla.org/en-US/docs/Learn/Getting_started_with_the_web/JavaScript_basics)
<!-- .element: style="margin-bottom:50px; font-size: 24px;" -->

* Tutorial de [JavaScript](http://www.w3schools.com/js) do W3C
<!-- .element: style="margin-bottom:50px; font-size: 24px;" -->

* MILETTO, Evandro Manara. [Desenvolvimento de software II: introdução ao desenvolvimento web com html, css, javascript e php](https://biblioteca.ifrs.edu.br/pergamum_ifrs/biblioteca_s/acesso_login.php?cod_acervo_acessibilidade=5020682&acesso=aHR0cHM6Ly9pbnRlZ3JhZGEubWluaGFiaWJsaW90ZWNhLmNvbS5ici9ib29rcy85Nzg4NTgyNjAxOTY5&label=acesso%20restrito). Porto Alegre Bookman 2014 1 recurso online ISBN 9788582601969.
<!-- .element: style="margin-bottom:100px; font-size: 24px;" -->

<center>
<a href="https://github.com/rodrigoprestesmachado" target="blanck"><img src="../../imgs/logo.png" alt="Rodrigo Prestes Machado" width="4%" height="4%" border=0 style="border:0; text-decoration:none; outline:none"></a><br/>
<a rel="license" href="http://creativecommons.org/licenses/by/4.0/">Creative Commons Atribuição 4.0 Internacional</a>
</center>