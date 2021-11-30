<!-- .slide:  data-background-opacity="0.1" data-background-image="https://miro.medium.com/max/1800/1*6ahbWjp_g9hqhaTDSJOL1Q.png"
data-transition="convex"  -->
# Promise
<!-- .element: style="margin-bottom:100px; font-size: 50px; color:white; font-family: Marker Felt;" -->

Pressione 'F' para tela cheia
<!-- .element: style="font-size: small; color:white;" -->

[versão em pdf](?print-pdf)
<!-- .element: style="font-size: small;" -->


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
# Introdução 🤓
<!-- .element: style="margin-bottom:50px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

* Promise é um objeto usado para processamento assíncrono
<!-- .element: style="margin-bottom:50px; font-size: 23px; font-family: arial; color:#F5F5F5" -->

* Um Promise (uma "promessa") representa um valor que não é necessariamente conhecido quando a promessa é criada
<!-- .element: style="margin-bottom:50px; font-size: 23px; font-family: arial; color:#F5F5F5" -->

* Isto permite que métodos assíncronos retornem valores como métodos síncronos: ao invés do valor final, o método assíncrono retorna uma promessa de um valor em algum momento no futuro.
<!-- .element: style="margin-bottom:50px; font-size: 23px; font-family: arial; color:#F5F5F5" -->


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
# Estados de uma Promise ⌛
<!-- .element: style="margin-bottom:50px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

* Uma Promise pode estar em destes estados:
<!-- .element: style="margin-bottom:50px; font-size: 23px; font-family: arial; color:#F5F5F5" -->

  * pending (pendente): Estado inicial, que não foi realizada nem rejeitada.
  <!-- .element: style="margin-bottom:50px; font-size: 23px; font-family: arial; color:#F5F5F5" -->

  * fulfilled (realizada): sucesso na operação.
  <!-- .element: style="margin-bottom:50px; font-size: 23px; font-family: arial; color:#F5F5F5" -->

  * rejected (rejeitado):  falha na operação.
  <!-- .element: style="margin-bottom:50px; font-size: 23px; font-family: arial; color:#F5F5F5" -->


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
# Estados de uma Promise ⌛
<!-- .element: style="margin-bottom:50px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

* O método `then` da Promise é chamado sempre que houver uma mudança de estado
<!-- .element: style="margin-bottom:50px; font-size: 23px; font-family: arial; color:#F5F5F5" -->

* Posteriormente, o método `then` irá chama o método de tratamento associado ao estado (*rejected* ou *resolved*)
<!-- .element: style="margin-bottom:50px; font-size: 23px; font-family: arial; color:#F5F5F5" -->


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
# Estrutura de uma Promise 🚀
<!-- .element: style="margin-bottom:50px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

<iframe width="100%" height="300" src="//jsfiddle.net/prestesmachado/jzmtavw6/19/embedded/js/dark/" allowfullscreen="allowfullscreen" allowpaymentrequest frameborder="0"></iframe>


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
# Promise.resolve() e Promise.reject() ⌨️
<!-- .element: style="margin-bottom:50px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

* Os métodos Promise.resolve(value) e Promise.reject(reason) são utilizados para resolver uma Promise
<!-- .element: style="margin-bottom:50px; font-size: 23px; font-family: arial; color:#F5F5F5" -->

* O método Promise.resolve(value) retorna um objeto Promise que é resolvido com o valor passado
<!-- .element: style="margin-bottom:50px; font-size: 23px; font-family: arial; color:#F5F5F5" -->

* O método Promise.reject(reason) retorna um objeto Promise que é rejeitada com um dado motivo.
<!-- .element: style="margin-bottom:50px; font-size: 23px; font-family: arial; color:#F5F5F5" -->


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
# .then e .catch ⌨️
<!-- .element: style="margin-bottom:50px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

* O método `.then` sempre será chamado quando a Promise mudar de estado
<!-- .element: style="margin-bottom:50px; font-size: 23px; font-family: arial; color:#F5F5F5" -->

* O método `.catch` será chamado quando ocorrer um erro
<!-- .element: style="margin-bottom:50px; font-size: 23px; font-family: arial; color:#F5F5F5" -->

```javascript
    doSomething().then(function(result) {
        return sucessFunction(result);
    })
    .catch(function(fail) {
        return failFunction(fail);
    });
```
<!-- .element: style="margin-bottom:50px; font-size: 16px; font-family: arial; color:black; background-color: #F2FAF3;" -->


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
# Principais vantagens 👍
<!-- .element: style="margin-bottom:50px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

* Callbacks nunca serão chamadas antes da conclusão da execução atual de um eventos. No caso do Ajax, uma *callback* só é chamada depois que o servidor retornar
<!-- .element: style="margin-bottom:70px; font-size: 25px; font-family: arial; color:#F5F5F5" -->

* Uma Promise permite a construção de uma sequencia de [encadeamento](https://developer.mozilla.org/pt-BR/docs/Web/JavaScript/Guide/Using_promises#encadeamento). Por exemplo, onde cada operação subsequente começa quando a operação anterior é bem sucedida
<!-- .element: style="margin-bottom:70px; font-size: 25px; font-family: arial; color:#F5F5F5" -->


<!-- .slide: data-background="black" data-transition="zoom" -->
# Referências 📚
<!-- .element: style="margin-bottom:50px; font-size: 50px; color:2B2625; font-family: Marker Felt;" -->

* [Promise](https://developer.mozilla.org/pt-BR/docs/Web/JavaScript/Reference/Global_Objects/Promise) no MDN Web Docs
<!-- .element: style="margin-bottom:40px; font-size: 20px; color:white; font-family: arial;" -->

* [Usando promises](https://developer.mozilla.org/pt-BR/docs/Web/JavaScript/Guide/Using_promises) no MDN Web Docs
<!-- .element: style="margin-bottom:40px; font-size: 20px; color:white; font-family: arial;" -->

<center>
<a href="https://rpmhub.dev" target="blanck"><img src="../../imgs/logo.png" alt="Rodrigo Prestes Machado" width="3%" height="3%" border=0 style="border:0; text-decoration:none; outline:none"></a><br/>
<a rel="license" href="http://creativecommons.org/licenses/by/4.0/">Creative Commons Atribuição 4.0 Internacional</a>
<!-- .element: style="margin-bottom:40px; font-size: 14px; color:white; font-family: arial;" -->