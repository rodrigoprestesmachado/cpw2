<!-- .slide:  data-background-opacity="0.3" data-background-image="img/title.jpg" data-transition="convex"  -->
# Promise
<!-- .element: style="margin-bottom:100px; font-size: 50px; color:white; font-family: Marker Felt;" -->

Pressione 'F' para tela cheia
<!-- .element: style="font-size: small; color:white;" -->

[versão em pdf](?print-pdf)
<!-- .element: style="font-size: small;" -->


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
# Uma analogia
<!-- .element: style="margin-bottom:50px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

* Você compra um livro e recebe um **recibo** na hora
<!-- .element: style="margin-bottom:40px; font-size: 23px; font-family: arial; color:#F5F5F5" -->

* O livro ainda não chegou: o recibo é a garantia de que a encomenda está a caminho
<!-- .element: style="margin-bottom:40px; font-size: 23px; font-family: arial; color:#F5F5F5" -->

* Depois, o pacote chega **ou** a loja cancela o pedido
<!-- .element: style="margin-bottom:40px; font-size: 23px; font-family: arial; color:#F5F5F5" -->

* Enquanto espera, você segue outras tarefas
<!-- .element: style="margin-bottom:40px; font-size: 23px; font-family: arial; color:#F5F5F5" -->


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
# O que é uma Promise
<!-- .element: style="margin-bottom:50px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

* Objeto que representa o resultado **futuro** de uma operação assíncrona
<!-- .element: style="margin-bottom:40px; font-size: 23px; font-family: arial; color:#F5F5F5" -->

* A Promise é o recibo: nasce na hora, o valor chega depois
<!-- .element: style="margin-bottom:40px; font-size: 23px; font-family: arial; color:#F5F5F5" -->

* O restante do programa continua livre até o resultado existir
<!-- .element: style="margin-bottom:40px; font-size: 23px; font-family: arial; color:#F5F5F5" -->

* Organiza a espera e evita uma cadeia de callbacks aninhados
<!-- .element: style="margin-bottom:40px; font-size: 23px; font-family: arial; color:#F5F5F5" -->


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
# Os três estados
<!-- .element: style="margin-bottom:50px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

* **pending**: encomenda registrada, resultado ainda desconhecido
<!-- .element: style="margin-bottom:40px; font-size: 23px; font-family: arial; color:#F5F5F5" -->

* **fulfilled**: sucesso. O pacote chegou e a Promise carrega o valor
<!-- .element: style="margin-bottom:40px; font-size: 23px; font-family: arial; color:#F5F5F5" -->

* **rejected**: falha. O pedido foi cancelado e a Promise carrega o motivo
<!-- .element: style="margin-bottom:40px; font-size: 23px; font-family: arial; color:#F5F5F5" -->

* Ao sair de pending, a Promise se estabelece e não volta atrás
<!-- .element: style="margin-bottom:40px; font-size: 23px; font-family: arial; color:#F5F5F5" -->


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
# resolve e reject
<!-- .element: style="margin-bottom:50px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

* `resolve(valor)` conclui com sucesso e leva a Promise a **fulfilled**
<!-- .element: style="margin-bottom:40px; font-size: 23px; font-family: arial; color:#F5F5F5" -->

* `reject(motivo)` conclui com falha e leva a Promise a **rejected**
<!-- .element: style="margin-bottom:40px; font-size: 23px; font-family: arial; color:#F5F5F5" -->

* O estado de sucesso se chama `fulfilled`
<!-- .element: style="margin-bottom:40px; font-size: 23px; font-family: arial; color:#F5F5F5" -->

* A palavra *resolved* aparece em textos e erros como forma informal de falar desse sucesso
<!-- .element: style="margin-bottom:40px; font-size: 23px; font-family: arial; color:#F5F5F5" -->


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
# Criando uma Promise
<!-- .element: style="margin-bottom:30px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

```javascript
let entrega = new Promise((resolve, reject) => {
  setTimeout(() => {
    let estoqueDisponivel = true;
    if (estoqueDisponivel) {
      resolve("Livro entregue");
    } else {
      reject("Pedido cancelado: sem estoque");
    }
  }, 4000);
});
```
<!-- .element: style="margin-bottom:20px; font-size: 16px; font-family: arial; color:black; background-color: #F2FAF3;" -->

A Promise nasce pending. Quatro segundos depois, é cumprida ou rejeitada.
<!-- .element: style="font-size: 20px; font-family: arial; color:#F5F5F5" -->


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
# .then() e .catch()
<!-- .element: style="margin-bottom:30px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

* `.then()` abre a caixa quando o pacote chega
<!-- .element: style="margin-bottom:20px; font-size: 23px; font-family: arial; color:#F5F5F5" -->

* `.catch()` reage quando o pedido é cancelado
<!-- .element: style="margin-bottom:20px; font-size: 23px; font-family: arial; color:#F5F5F5" -->

```javascript
entrega
  .then((pacote) => {
    console.log(pacote);
  })
  .catch((motivo) => {
    console.error(motivo);
  });
```
<!-- .element: style="margin-bottom:20px; font-size: 16px; font-family: arial; color:black; background-color: #F2FAF3;" -->


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
# Encadeamento
<!-- .element: style="margin-bottom:30px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

* Cada etapa devolve o resultado para a próxima: pagamento, separação, envio
<!-- .element: style="margin-bottom:20px; font-size: 22px; font-family: arial; color:#F5F5F5" -->

* O valor retornado por um `.then()` entra no `.then()` seguinte
<!-- .element: style="margin-bottom:20px; font-size: 22px; font-family: arial; color:#F5F5F5" -->

```javascript
confirmarPagamento()
  .then((resultado) => separarPacote(resultado))
  .then((resultado) => enviar(resultado))
  .then((resultado) => console.log(resultado))
  .catch((motivo) => console.error(motivo));
```
<!-- .element: style="margin-bottom:20px; font-size: 16px; font-family: arial; color:black; background-color: #F2FAF3;" -->

Um `.catch()` no final trata a falha de qualquer etapa.
<!-- .element: style="font-size: 20px; font-family: arial; color:#F5F5F5" -->


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
# Async e Await
<!-- .element: style="margin-bottom:50px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

* `async` marca uma função que devolve uma Promise
<!-- .element: style="margin-bottom:40px; font-size: 23px; font-family: arial; color:#F5F5F5" -->

* `await` pausa só essa função até a Promise ser cumprida
<!-- .element: style="margin-bottom:40px; font-size: 23px; font-family: arial; color:#F5F5F5" -->

* O valor resolvido cai direto em uma variável
<!-- .element: style="margin-bottom:40px; font-size: 23px; font-family: arial; color:#F5F5F5" -->

* `await` só pode ser usado dentro de uma função `async`
<!-- .element: style="margin-bottom:40px; font-size: 23px; font-family: arial; color:#F5F5F5" -->


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
# Async e Await
<!-- .element: style="margin-bottom:30px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

```javascript
async function acompanharEntrega() {
  try {
    let pagamento = await confirmarPagamento();
    let pacote = await separarPacote(pagamento);
    let envio = await enviar(pacote);
    console.log(envio);
  } catch (motivo) {
    console.error(motivo);
  }
}
```
<!-- .element: style="margin-bottom:20px; font-size: 16px; font-family: arial; color:black; background-color: #F2FAF3;" -->

`try`/`catch` ocupa o lugar do `.catch()` quando alguma etapa falha.
<!-- .element: style="font-size: 20px; font-family: arial; color:#F5F5F5" -->


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
# fetch por dentro
<!-- .element: style="margin-bottom:40px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

* O `fetch` devolve uma Promise. Por baixo, a requisição ainda é um `XMLHttpRequest`
<!-- .element: style="margin-bottom:30px; font-size: 22px; font-family: arial; color:#F5F5F5" -->

* A função devolve o recibo na hora. `resolve` e `reject` rodam quando a resposta chega
<!-- .element: style="margin-bottom:30px; font-size: 22px; font-family: arial; color:#F5F5F5" -->

* Status 200–299 cumpre a Promise. Outro status, ou falha de rede, rejeita
<!-- .element: style="margin-bottom:30px; font-size: 22px; font-family: arial; color:#F5F5F5" -->


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
# fetch por dentro
<!-- .element: style="margin-bottom:20px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

```javascript
function buscar(url) {
  return new Promise((resolve, reject) => {
    let xhr = new XMLHttpRequest();
    xhr.open("GET", url, true);
    xhr.onreadystatechange = () => {
      if (xhr.readyState === 4) {
        if (xhr.status >= 200 && xhr.status < 300) {
          resolve(xhr.responseText);
        } else {
          reject(new Error("Erro HTTP: " + xhr.status));
        }
      }
    };
    xhr.onerror = () => reject(new Error("Falha de rede"));
    xhr.send();
  });
}
```
<!-- .element: style="margin-bottom:16px; font-size: 15px; font-family: arial; color:black; background-color: #F2FAF3;" -->

No `fetch` real, status 404 ainda cumpre a Promise: confira `response.ok` no `.then()`.
<!-- .element: style="font-size: 18px; font-family: arial; color:#F5F5F5" -->


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
# Referências
<!-- .element: style="margin-bottom:50px; font-size: 50px; font-family: Marker Felt; color:#2B2625" -->

* [Promise](https://developer.mozilla.org/pt-BR/docs/Web/JavaScript/Reference/Global_Objects/Promise) no MDN Web Docs
<!-- .element: style="margin-bottom:40px; font-size: 20px; color:white; font-family: arial;" -->

* [Usando promises](https://developer.mozilla.org/pt-BR/docs/Web/JavaScript/Guide/Using_promises) no MDN Web Docs
<!-- .element: style="margin-bottom:40px; font-size: 20px; color:white; font-family: arial;" -->

* [Async/Await](https://javascript.info/async-await) no JavaScript.info
<!-- .element: style="margin-bottom:40px; font-size: 20px; color:white; font-family: arial;" -->

<center>
<a href="https://rpmhub.dev" target="blanck"><img src="../../imgs/logo.png" alt="Rodrigo Prestes Machado" width="3%" height="3%" border=0 style="border:0; text-decoration:none; outline:none"></a><br/>
<a rel="license" href="http://creativecommons.org/licenses/by/4.0/">CC BY 4.0 DEED</a>
<!-- .element: style="margin-bottom:40px; font-size: 14px; color:white; font-family: arial;" -->
