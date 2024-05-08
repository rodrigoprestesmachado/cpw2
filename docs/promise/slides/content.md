<!-- .slide:  data-background-opacity="0.3" data-background-image="img/title.jpg" data-transition="convex"  -->
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

* Permite que você associe tratadores que serão associado ao valor de sucesso
ou erro em uma ação assíncrona no futuro.
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

* Posteriormente, o método `then` irá chamar o método de tratamento associado ao estado (*rejected* ou *resolved*)
<!-- .element: style="margin-bottom:50px; font-size: 23px; font-family: arial; color:#F5F5F5" -->


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
# Estados de uma Promise ⌛
<!-- .element: style="margin-bottom:50px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

<img src="https://warcontent.com/wp-content/uploads/2022/04/promise-javascript-6-1-1024x576.png"/>
<!-- .element: style="width: 600px; margin-bottom:40px; font-size: 23px; font-family: arial; color:#F5F5F5" -->


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

* Callbacks nunca serão chamadas antes da conclusão da execução atual de um eventos. No caso do AJaX, uma *callback* só é chamada depois que o servidor retornar
<!-- .element: style="margin-bottom:70px; font-size: 25px; font-family: arial; color:#F5F5F5" -->

* Uma Promise permite a construção de uma sequencia de [encadeamento](https://developer.mozilla.org/pt-BR/docs/Web/JavaScript/Guide/Using_promises#encadeamento). Por exemplo, onde cada operação subsequente começa quando a operação anterior é bem sucedida
<!-- .element: style="margin-bottom:70px; font-size: 25px; font-family: arial; color:#F5F5F5" -->


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
# Async e Await
<!-- .element: style="margin-bottom:50px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

* Existe uma sintaxe especial para trabalhar com Promises de uma forma mais confortável chamada `async`/` await`
<!-- .element: style="margin-bottom:70px; font-size: 25px; font-family: arial; color:#F5F5F5" -->

* A palavra `async` antes de uma função significa que uma função irá retornar uma Promise
<!-- .element: style="margin-bottom:70px; font-size: 25px; font-family: arial; color:#F5F5F5" -->

* A expressão `await` pausa a execução da função assíncrona e espera pela resolução da Promise
<!-- .element: style="margin-bottom:70px; font-size: 25px; font-family: arial; color:#F5F5F5" -->


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
# Async e Await
<!-- .element: style="margin-bottom:50px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

A palavra chave Async necessita ser utiliza em uma função que retorna uma Promise e em um [módulo](https://javascript.info/modules-intro) JS
<!-- .element: style="margin-bottom:30px; font-size: 23px; font-family: arial; color:#F5F5F5" -->

```js
export async function promiseExample(value){
    // 1 - Criando a promise
    return new Promise(function (resolve, reject) {
        if (value) {
        // 2 - usando resolve no caso de sucesso
        resolve("value true");
        } else {
        // 3 - usando reject no caso de erro
        reject(Error("value false!"));
        }
    });
}
```
<!-- .element: style="margin-bottom:50px; font-size: 16px; font-family: arial; color:black; background-color: #F2FAF3;" -->


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
# Async e Await
<!-- .element: style="margin-bottom:50px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

```html
<script type="module">
    import { promiseExample } from "./async.js";
    try {
        let result = await promiseExample(true);
        console.log(result);
    } catch (error) {
        console.error(error);
    }
</script>
```
<!-- .element: style="margin-bottom:50px; font-size: 16px; font-family: arial; color:black; background-color: #F2FAF3;" -->

Observe o código sem o uso de async/await
<!-- .element: style="margin-bottom:30px; font-size: 20px; font-family: arial; color:#F5F5F5" -->

```js
promiseExample(true)
    .then(function (response) {
        console.log(response);
    })
    .catch(function (error) {
        console.log(response.toString());
    });
```
<!-- .element: style="margin-bottom:50px; font-size: 16px; font-family: arial; color:black; background-color: #F2FAF3;" -->


<!-- .slide:  data-background-opacity="0.1" data-background-image="https://miro.medium.com/max/1800/1*6ahbWjp_g9hqhaTDSJOL1Q.png" data-transition="convex"  -->
# Referências 📚
<!-- .element: style="margin-bottom:50px; font-size: 50px; color:2B2625; font-family: Marker Felt;" -->

* [Promise](https://developer.mozilla.org/pt-BR/docs/Web/JavaScript/Reference/Global_Objects/Promise) no MDN Web Docs
<!-- .element: style="margin-bottom:40px; font-size: 20px; color:white; font-family: arial;" -->

* [Usando promises](https://developer.mozilla.org/pt-BR/docs/Web/JavaScript/Guide/Using_promises) no MDN Web Docs
<!-- .element: style="margin-bottom:40px; font-size: 20px; color:white; font-family: arial;" -->

* [Async/Await](https://javascript.info/async-await) no Javascript.info
<!-- .element: style="margin-bottom:40px; font-size: 20px; color:white; font-family: arial;" -->

<center>
<a href="https://rpmhub.dev" target="blanck"><img src="../../imgs/logo.png" alt="Rodrigo Prestes Machado" width="3%" height="3%" border=0 style="border:0; text-decoration:none; outline:none"></a><br/>
<a rel="license" href="http://creativecommons.org/licenses/by/4.0/">CC BY 4.0 DEED</a>
<!-- .element: style="margin-bottom:40px; font-size: 14px; color:white; font-family: arial;" -->