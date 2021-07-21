<!-- .slide:  data-background-opacity="0.1" data-background-image="https://miro.medium.com/max/1800/1*6ahbWjp_g9hqhaTDSJOL1Q.png" 
data-transition="convex"  -->
# Tipo de dados primitivos
<!-- .element: style="margin-bottom:100px; font-size: 50px; color:white; font-family: Marker Felt;" -->

Pressione 'F' para tela cheia
<!-- .element: style="font-size: small; color:white;" -->

[versão em pdf](?print-pdf)
<!-- .element: style="font-size: small;" -->


<!-- .slide: data-transition="convex" data-background="#F1F1F1" -->
## Tipo de dados primitivos

* Numbers – qualquer valor que possa ser calculado (positivo ou negativo)
<!-- .element: style="margin-bottom:50px; font-size: 24px;" -->

* String – uma sequencia de caracteres
<!-- .element: style="margin-bottom:50px; font-size: 24px;" -->

* Boolean – verdade ou falso (true e false)
<!-- .element: style="margin-bottom:50px; font-size: 24px;" -->

* Null – um valor vazio (ausência de valor)
<!-- .element: style="margin-bottom:50px; font-size: 24px;" -->

* Undefined - representa um valor indefinido
<!-- .element: style="margin-bottom:50px; font-size: 24px;" -->

* Symbol – representa um identificador escondido
<!-- .element: style="margin-bottom:50px; font-size: 24px;" -->


<!-- .slide: data-transition="convex" data-background="#F1F1F1" -->
## Numbers

* Os números podem ser escritos em três bases:
  * Base 10
    * exemplo: 56 (sem o zero)
<!-- .element: style="margin-bottom:50px; font-size: 24px;" -->
  * base 8 (octal)
    * exemplo: 056 
      * O zero na frente representa um número em octal
<!-- .element: style="margin-bottom:50px; font-size: 24px;" -->
  * base 16 (hexadecimal)
    * exemplo: ox5F ou OX5F
      * O zero x (ox) define um número em hexadecimal
<!-- .element: style="margin-bottom:50px; font-size: 24px;" -->


<!-- .slide: data-transition="convex" data-background="#F1F1F1" -->
## Numbers

* Também temos números com ponto flutuante:
  * 7.2945

  * -34.2

  * 2e3  => 2 x 103 => 2000

  * 2e-3 => 2 x 10-3 => 0.002
<!-- .element: style="margin-bottom:50px; font-size: 24px;" -->


<!-- .slide: data-transition="convex" data-background="#F1F1F1" -->
## String

* Uma string é uma sequencia de caracteres:
  * "Hello!" // String declarada com aspas duplas

  * ‘245’ // String declarada com aspas simples

  * ""  // String vazia
<!-- .element: style="margin-bottom:50px; font-size: 24px;" -->

* Nota: Uma string vazia é diferente de Null
<!-- .element: style="margin-bottom:50px; font-size: 24px;" -->


<!-- .slide: data-transition="convex" data-background="#F1F1F1" -->
## Boolean

* Diferente de outras linguagens de programação o valor de um boolean é apenas true ou false
<!-- .element: style="margin-bottom:50px; font-size: 24px;" -->

* Em JavaScript, o valor zero (0) e um (1) não são considerados como true ou false
<!-- .element: style="margin-bottom:50px; font-size: 24px;" -->


<!-- .slide: data-transition="convex" data-background="#F1F1F1" -->
## Null

* O null é um tipo de dado que indica que uma variável não possui valor
<!-- .element: style="margin-bottom:50px; font-size: 24px;" -->

* O valor null é retornado se você tentar utilizar uma variável que não foi definida e sem valor
<!-- .element: style="margin-bottom:50px; font-size: 24px;" -->

* Um exemplo, se o usuário escolher cancelar, o null é retornado na função prompt:
<!-- .element: style="margin-bottom:50px; font-size: 24px;" -->


<!-- .slide: data-transition="convex"  data-background="#F1F1F1"-->
## Undefined

* Uma variável que não teve um valor atribuído é do tipo undefined
<!-- .element: style="margin-bottom:50px; font-size: 24px;" -->

* Um método também retorna undefined se a variável que está sendo avaliada não tem um valor atribuído
<!-- .element: style="margin-bottom:50px; font-size: 24px;" -->

* Uma função retorna undefined se um valor não for retornado
<!-- .element: style="margin-bottom:50px; font-size: 24px;" -->

```js

var x;
if (x === undefined) {
    console.log("Será executado);
}
```


<!-- .slide: data-transition="convex" data-background="#F1F1F1" -->
## NaN (not a number)

* Algumas funções retornam o um valor especial chamado NaN
<!-- .element: style="margin-bottom:50px; font-size: 24px;" -->

* É possível fazer um teste para verificar se um valor é um número ou não:
<!-- .element: style="margin-bottom:50px; font-size: 24px;" -->

```js
function notANumber(){
    alert(isNaN("Hello")); 
}
```


<!-- .slide: data-transition="convex" -->
 ## Symbol
 <iframe width="100%" height="300" src="//jsfiddle.net/prestesmachado/qp5ongj1/41/embedded/js,html,result/dark/" allowfullscreen="allowfullscreen" allowpaymentrequest frameborder="0"></iframe>


# Referências

* Comunidade [Discord](https://discord.com/invite/C29cqvm): canal `#cpw2`

* MDN [JavaScript basics](https://developer.mozilla.org/en-US/docs/Learn/Getting_started_with_the_web/JavaScript_basics)

* Tutorial de [JavaScript](http://www.w3schools.com/js) do W3C

* MILETTO, Evandro Manara. [Desenvolvimento de software II: introdução ao desenvolvimento web com html, css, javascript e php](https://biblioteca.ifrs.edu.br/pergamum_ifrs/biblioteca_s/acesso_login.php?cod_acervo_acessibilidade=5020682&acesso=aHR0cHM6Ly9pbnRlZ3JhZGEubWluaGFiaWJsaW90ZWNhLmNvbS5ici9ib29rcy85Nzg4NTgyNjAxOTY5&label=acesso%20restrito). Porto Alegre Bookman 2014 1 recurso online ISBN 9788582601969.

<center>
<a href="https://github.com/rodrigoprestesmachado" target="blanck"><img src="../../imgs/logo.png" alt="Rodrigo Prestes Machado" width="3%" height="3%" border=0 style="border:0; text-decoration:none; outline:none"></a><br/>
<a rel="license" href="http://creativecommons.org/licenses/by/4.0/">Creative Commons Atribuição 4.0 Internacional</a>
</center>