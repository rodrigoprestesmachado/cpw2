<!-- .slide:  data-background-opacity="0.1" data-background-image="https://miro.medium.com/max/1800/1*6ahbWjp_g9hqhaTDSJOL1Q.png" 
data-transition="convex"  -->
# Tipo de dados primitivos
<!-- .element: style="margin-bottom:100px; font-size: 40px; color:white; font-family: Marker Felt;" -->

Pressione 'F' para tela cheia
<!-- .element: style="font-size: small; color:white;" -->

[versão em pdf](?print-pdf)
<!-- .element: style="font-size: small;" -->


<!-- .slide: data-background="#4AA791" data-transition="concave"  -->
## Tipo de dados primitivos 💽
<!-- .element: style="margin-bottom:50px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

* Numbers – qualquer valor que possa ser calculado (positivo ou negativo)
<!-- .element: style="margin-bottom:40px; font-size: 25px; font-family: arial; color:#F5F5F5" -->

* String – uma sequencia de caracteres
<!-- .element: style="margin-bottom:40px; font-size: 25px; font-family: arial; color:#F5F5F5" -->

* Boolean – verdade ou falso (true e false)
<!-- .element: style="margin-bottom:40px; font-size: 25px; font-family: arial; color:#F5F5F5" -->

* Null – um valor vazio (ausência de valor)
<!-- .element: style="margin-bottom:40px; font-size: 25px; font-family: arial; color:#F5F5F5" -->

* Undefined - representa um valor indefinido
<!-- .element: style="margin-bottom:40px; font-size: 25px; font-family: arial; color:#F5F5F5" -->

* Symbol – representa um identificador escondido
<!-- .element: style="margin-bottom:40px; font-size: 25px; font-family: arial; color:#F5F5F5" -->


<!-- .slide: data-background="#4AA791" data-transition="concave"  -->
## Numbers ✏️
<!-- .element: style="margin-bottom:50px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

* Os números podem ser escritos em três bases:
<!-- .element: style="margin-bottom:40px; font-size: 30px; font-family: arial; color:#F5F5F5" -->
  * Base 10
  <!-- .element: style="margin-bottom:40px; font-size: 25px; font-family: arial; color:#F5F5F5" -->
    * exemplo: 56 (sem o zero)
    <!-- .element: style="margin-bottom:60px; font-size: 20px; font-family: arial; color:#F5F5F5" -->
  * base 8 (octal)
  <!-- .element: style="margin-bottom:40px; font-size: 25px; font-family: arial; color:#F5F5F5" -->
    * exemplo: 056 
    <!-- .element: style="margin-bottom:40px; font-size: 20px; font-family: arial; color:#F5F5F5" -->
      * O zero na frente representa um número em octal
      <!-- .element: style="margin-bottom:60px; font-size: 18px; font-family: arial; color:#F5F5F5" -->
  * base 16 (hexadecimal)
  <!-- .element: style="margin-bottom:40px; font-size: 25px; font-family: arial; color:#F5F5F5" -->
    * exemplo: ox5F ou OX5F
    <!-- .element: style="margin-bottom:40px; font-size: 20px; font-family: arial; color:#F5F5F5" -->
      * O zero x (ox) define um número em hexadecimal
      <!-- .element: style="margin-bottom:40px; font-size: 18px; font-family: arial; color:#F5F5F5" -->


<!-- .slide: data-background="#4AA791" data-transition="concave"  -->
## Numbers ✏️
<!-- .element: style="margin-bottom:50px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

* Também temos números com ponto flutuante:
<!-- .element: style="margin-bottom:40px; font-size: 30px; font-family: arial; color:#F5F5F5" -->

  * 7.2945
  <!-- .element: style="margin-bottom:40px; font-size: 25px; font-family: arial; color:#F5F5F5" -->

  * -34.2
  <!-- .element: style="margin-bottom:40px; font-size: 25px; font-family: arial; color:#F5F5F5" -->

  * 2e3  => 2 x 103 => 2000
  <!-- .element: style="margin-bottom:40px; font-size: 25px; font-family: arial; color:#F5F5F5" -->

  * 2e-3 => 2 x 10-3 => 0.002
  <!-- .element: style="margin-bottom:40px; font-size: 25px; font-family: arial; color:#F5F5F5" -->


<!-- .slide: data-background="#4AA791" data-transition="concave"  -->
## String 📝
<!-- .element: style="margin-bottom:50px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

* Uma string é uma sequencia de caracteres:
<!-- .element: style="margin-bottom:40px; font-size: 30px; font-family: arial; color:#F5F5F5" -->

  * "Hello!" // String declarada com aspas duplas
  <!-- .element: style="margin-bottom:40px; font-size: 25px; font-family: arial; color:#F5F5F5" -->

  * ‘245’ // String declarada com aspas simples
  <!-- .element: style="margin-bottom:40px; font-size: 25px; font-family: arial; color:#F5F5F5" -->

  * ""  // String vazia
  <!-- .element: style="margin-bottom:60px; font-size: 25px; font-family: arial; color:#F5F5F5" -->

* ⚠️ Uma string vazia é diferente de Null
<!-- .element: style="margin-bottom:40px; font-size: 30px; font-family: arial; color:#F5F5F5" -->


<!-- .slide: data-background="#4AA791" data-transition="concave"  -->
## Boolean
<!-- .element: style="margin-bottom:50px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

* Diferente de outras linguagens de programação o valor de um boolean é apenas true ou false
<!-- .element: style="margin-bottom:60px; font-size: 25px; font-family: arial; color:#F5F5F5" -->

* Em JavaScript, o valor zero (0) e um (1) não são considerados como true ou false
 <!-- .element: style="margin-bottom:60px; font-size: 25px; font-family: arial; color:#F5F5F5" -->


<!-- .slide: data-background="#4AA791" data-transition="concave"  -->
## Null
<!-- .element: style="margin-bottom:50px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

* O null é um tipo de dado que indica que uma variável não possui valor
<!-- .element: style="margin-bottom:60px; font-size: 25px; font-family: arial; color:#F5F5F5" -->

* O valor null é retornado se você tentar utilizar uma variável que não foi definida e sem valor
<!-- .element: style="margin-bottom:60px; font-size: 25px; font-family: arial; color:#F5F5F5" -->

* Um exemplo, se o usuário escolher cancelar, o null é retornado na função prompt:
<!-- .element: style="margin-bottom:60px; font-size: 25px; font-family: arial; color:#F5F5F5" -->


<!-- .slide: data-background="#4AA791" data-transition="concave"  -->
## Undefined
<!-- .element: style="margin-bottom:50px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

* Uma variável que não teve um valor atribuído é do tipo undefined
<!-- .element: style="margin-bottom:60px; font-size: 25px; font-family: arial; color:#F5F5F5" -->

* Um método também retorna undefined se a variável que está sendo avaliada não tem um valor atribuído
<!-- .element: style="margin-bottom:60px; font-size: 25px; font-family: arial; color:#F5F5F5" -->

* Uma função retorna undefined se um valor não for retornado
<!-- .element: style="margin-bottom:60px; font-size: 25px; font-family: arial; color:#F5F5F5" -->

```js
var x;
if (x === undefined) {
    console.log("Será executado);
}
```
<!-- .element: style="margin-bottom:50px; font-size: 16px; font-family: arial; color:black; background-color: #F2FAF3;" -->


<!-- .slide: data-background="#4AA791" data-transition="concave"  -->
## NaN (not a number)
<!-- .element: style="margin-bottom:50px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

* Algumas funções retornam o um valor especial chamado NaN
<!-- .element: style="margin-bottom:60px; font-size: 25px; font-family: arial; color:#F5F5F5" -->

* É possível fazer um teste para verificar se um valor é um número ou não:
<!-- .element: style="margin-bottom:60px; font-size: 25px; font-family: arial; color:#F5F5F5" -->

```js
function notANumber(){
    alert(isNaN("Hello")); 
}
```
<!-- .element: style="margin-bottom:50px; font-size: 16px; font-family: arial; color:black; background-color: #F2FAF3;" -->


<!-- .slide: data-background="#4AA791" data-transition="concave"  -->
 ## Symbol
<!-- .element: style="margin-bottom:50px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

 <iframe width="100%" height="240" src="//jsfiddle.net/prestesmachado/qp5ongj1/41/embedded/js,html,result/dark/" allowfullscreen="allowfullscreen" allowpaymentrequest frameborder="0"></iframe>


<!-- .slide: data-background="#4AA791" data-transition="concave"  -->
# Referências 📚
<!-- .element: style="margin-bottom:50px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

* MDN [JavaScript basics](https://developer.mozilla.org/en-US/docs/Learn/Getting_started_with_the_web/JavaScript_basics)
<!-- .element: style="margin-bottom:60px; font-size: 25px; font-family: arial; color:#F5F5F5" -->

* Tutorial de [JavaScript](http://www.w3schools.com/js) do W3C
<!-- .element: style="margin-bottom:60px; font-size: 25px; font-family: arial; color:#F5F5F5" -->

* MILETTO, Evandro Manara. [Desenvolvimento de software II: introdução ao desenvolvimento web com html, css, javascript e php](https://biblioteca.ifrs.edu.br/pergamum_ifrs/biblioteca_s/acesso_login.php?cod_acervo_acessibilidade=4020682&acesso=aHR0cHM6Ly9pbnRlZ3JhZGEubWluaGFiaWJsaW90ZWNhLmNvbS5ici9ib29rcy85Nzg4NTgyNjAxOTY5&label=acesso%20restrito). Porto Alegre Bookman 2014 1 recurso online ISBN 9788582601969.
<!-- .element: style="margin-bottom:60px; font-size: 25px; font-family: arial; color:#F5F5F5" -->

<center>
<a href="https://github.com/rodrigoprestesmachado" target="blanck"><img src="../../imgs/logo.png" alt="Rodrigo Prestes Machado" width="3%" height="3%" border=0 style="border:0; text-decoration:none; outline:none"></a><br/>
<a rel="license" href="http://creativecommons.org/licenses/by/4.0/">Creative Commons Atribuição 4.0 Internacional</a>
</center>