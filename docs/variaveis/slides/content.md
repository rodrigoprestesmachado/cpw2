<!-- .slide:  data-background-opacity="0.3" data-background-image="imgs/title.jpg" data-transition="convex"  -->
# Variáveis
<!-- .element: style="margin-bottom:100px; font-size: 50px; color:white; font-family: Marker Felt;" -->

Pressione 'F' para tela cheia
<!-- .element: style="font-size: small; color:white;" -->

[versão em pdf](?print-pdf)
<!-- .element: style="font-size: small;" -->


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
## O que é uma variável? 🗃️
<!-- .element: style="margin-bottom:40px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

* Um nome que guarda um valor no programa
<!-- .element: style="margin-bottom:30px; font-size: 26px; font-family: arial; color:#F5F5F5" -->

* Em vez de repetir o mesmo número ou texto, você dá um nome e reutiliza
<!-- .element: style="margin-bottom:30px; font-size: 26px; font-family: arial; color:#F5F5F5" -->

```js
let idade = 20;
idade = 21; // o nome idade passa a guardar 21
```
<!-- .element: style="margin-bottom:30px; font-size: 18px; font-family: arial; color:black; background-color: #F2FAF3;" -->


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
## Declarar e atribuir
<!-- .element: style="margin-bottom:40px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

* Declarar cria o nome
<!-- .element: style="margin-bottom:30px; font-size: 26px; font-family: arial; color:#F5F5F5" -->

* Atribuir coloca (ou troca) o valor
<!-- .element: style="margin-bottom:30px; font-size: 26px; font-family: arial; color:#F5F5F5" -->

* Sem atribuir, o valor fica `undefined`
<!-- .element: style="margin-bottom:30px; font-size: 26px; font-family: arial; color:#F5F5F5" -->

```js
let cidade;
console.log(cidade); // undefined
cidade = "Porto Alegre";
```
<!-- .element: style="margin-bottom:30px; font-size: 18px; font-family: arial; color:black; background-color: #F2FAF3;" -->


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
## Regras de nome
<!-- .element: style="margin-bottom:40px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

* JavaScript é *case-sensitive*: `idade` e `Idade` são diferentes
<!-- .element: style="margin-bottom:50px; font-size: 26px; font-family: arial; color:#F5F5F5" -->

* O nome precisa começar com uma letra ou com `_` (underscore)
<!-- .element: style="margin-bottom:50px; font-size: 26px; font-family: arial; color:#F5F5F5" -->

* Prefira nomes descritivos: `totalItens` em vez de `x`
<!-- .element: style="margin-bottom:50px; font-size: 26px; font-family: arial; color:#F5F5F5" -->


<!-- .slide: data-background="#4AA791" data-transition="concave"  -->
## let
<!-- .element: style="margin-bottom:40px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

* Use `let` quando o valor puder mudar
<!-- .element: style="margin-bottom:30px; font-size: 26px; font-family: arial; color:#F5F5F5" -->

* Escopo de bloco: só existe dentro das chaves `{ }` em que foi declarada
<!-- .element: style="margin-bottom:30px; font-size: 26px; font-family: arial; color:#F5F5F5" -->

```js
if (true) {
  let x = 10;
  console.log(x); // 10
}
// console.log(x); // erro: x não existe fora do bloco
```
<!-- .element: style="margin-bottom:30px; font-size: 16px; font-family: arial; color:black; background-color: #F2FAF3;" -->


<!-- .slide: data-background="#4AA791" data-transition="concave"  -->
## let na prática
<!-- .element: style="margin-bottom:40px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

Demo: escopo de bloco com `let` ([ES6](https://www.w3schools.com/js/js_es6.asp))
<!-- .element: style="margin-bottom:30px; font-size: 24px; font-family: arial; color:#F5F5F5" -->

<iframe width="100%" height="320" src="//jsfiddle.net/prestesmachado/ywbjf7gm/9/embedded/js,html,css,result/dark/" allowfullscreen="allowfullscreen" allowpaymentrequest frameborder="0"></iframe>


<!-- .slide: data-background="#4AA791" data-transition="concave"  -->
## const
<!-- .element: style="margin-bottom:40px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

* Use `const` quando o nome não deve apontar para outro valor
<!-- .element: style="margin-bottom:30px; font-size: 26px; font-family: arial; color:#F5F5F5" -->

* Precisa atribuir na declaração e não pode reatribuir
<!-- .element: style="margin-bottom:30px; font-size: 26px; font-family: arial; color:#F5F5F5" -->

* Também tem escopo de bloco, como `let`
<!-- .element: style="margin-bottom:30px; font-size: 26px; font-family: arial; color:#F5F5F5" -->

```js
const PI = 3.14159;
// PI = 3; // erro: não é permitido reatribuir
```
<!-- .element: style="margin-bottom:30px; font-size: 16px; font-family: arial; color:black; background-color: #F2FAF3;" -->


<!-- .slide: data-background="#4AA791" data-transition="concave"  -->
## const e objetos
<!-- .element: style="margin-bottom:40px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

* `const` impede trocar a referência
<!-- .element: style="margin-bottom:30px; font-size: 26px; font-family: arial; color:#F5F5F5" -->

* Não impede mudar propriedades ou elementos de objetos e arrays
<!-- .element: style="margin-bottom:30px; font-size: 26px; font-family: arial; color:#F5F5F5" -->

```js
const pessoa = { nome: "Ana" };
pessoa.nome = "Bia"; // permitido
// pessoa = {}; // erro: reatribuir não é permitido
```
<!-- .element: style="margin-bottom:30px; font-size: 16px; font-family: arial; color:black; background-color: #F2FAF3;" -->


<!-- .slide: data-background="#4AA791" data-transition="concave"  -->
## var (legado)
<!-- .element: style="margin-bottom:40px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

* Forma antiga: evite em código novo
<!-- .element: style="margin-bottom:30px; font-size: 26px; font-family: arial; color:#F5F5F5" -->

* Não respeita escopo de bloco: “vaza” para a função (ou para o global)
<!-- .element: style="margin-bottom:30px; font-size: 26px; font-family: arial; color:#F5F5F5" -->

```js
function exemplo() {
  if (true) {
    var x = 10;
  }
  console.log(x); // 10 (ainda existe fora do if)
}
```
<!-- .element: style="margin-bottom:30px; font-size: 16px; font-family: arial; color:black; background-color: #F2FAF3;" -->


<!-- .slide: data-background="#4AA791" data-transition="concave"  -->
## var na prática
<!-- .element: style="margin-bottom:40px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

Demo: `var` sem escopo de bloco
<!-- .element: style="margin-bottom:30px; font-size: 24px; font-family: arial; color:#F5F5F5" -->

<iframe width="100%" height="320" src="//jsfiddle.net/prestesmachado/z9egunav/28/embedded/js,html,css,result/dark/" allowfullscreen="allowfullscreen" allowpaymentrequest frameborder="0"></iframe>


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
## Boas práticas
<!-- .element: style="margin-bottom:40px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

* Prefira `const` por padrão
<!-- .element: style="margin-bottom:40px; font-size: 28px; font-family: arial; color:#F5F5F5" -->

* Use `let` somente quando precisar reatribuir
<!-- .element: style="margin-bottom:40px; font-size: 28px; font-family: arial; color:#F5F5F5" -->

* Evite `var`
<!-- .element: style="margin-bottom:40px; font-size: 28px; font-family: arial; color:#F5F5F5" -->

* Nomes claros; evite poluir o escopo global
<!-- .element: style="margin-bottom:40px; font-size: 28px; font-family: arial; color:#F5F5F5" -->


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
