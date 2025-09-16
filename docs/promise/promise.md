---
layout: default
title: Promise
parent: Conceitos Finais
nav_order: 41
---

# Promise

<center>
<iframe src="https://cpw2.rpmhub.dev/promise/slides/index.html#/" title="Promise" width="90%" height="500" style="border:none;"></iframe>
</center>

Uma Promise (promessa) em JavaScript é um objeto que representa o resultado de
uma operação assíncrona. Ela pode estar em um dos três estados: pendente
(_pending_), realizada (_resolved_), ou rejeitada (_rejected_). As Promises são
usadas para lidar com tarefas assíncronas de forma mais organizada e eficiente,
evitando o uso excessivo de callbacks aninhados.

Quando uma Promise é criada, ela executa uma função que pode ser assíncrona.
Essa função recebe dois parâmetros, `resolve` e `reject`, que são funções
fornecidas pelo JavaScript para indicar se a operação assíncrona foi
bem-sucedida (`resolve`) ou falhou (`reject`). Dentro da função assíncrona,
quando a tarefa é concluída com sucesso, chamamos `resolve(valor)` para retornar
o resultado desejado. Se ocorrer um erro ou a tarefa falhar, chamamos
`reject(erro)` para indicar o motivo da falha.

Por exemplo:

```javascript
let minhaPromise = new Promise((resolve, reject) => {
  // Simulando uma operação assíncrona
  setTimeout(() => {
    let sucesso = true; // Mudar para false para simular um erro
    if (sucesso) {
      resolve("Operação concluída com sucesso!");
    } else {
      reject("Erro: operação falhou!");
    }
  }, 4000); // Tempo de espera de 4 segundos
});

minhaPromise.then((resultado) => {
  console.log(resultado); // Resultado quando a Promise é resolvida
}).catch((erro) => {
  console.error(erro); // Mensagem de erro quando a Promise é rejeitada
});
```

Neste exemplo, `minhaPromise` é uma Promise que simula uma operação assíncrona.
Se a operação for bem-sucedida, a Promise é resolvida e o resultado é capturado
pelo método `.then()`. Se houver um erro, a Promise é rejeitada e o motivo é
capturado pelo método `.catch()`.

## Encadeamento de Promises

As Promises podem ser encadeadas para executar uma sequência de operações
assíncronas. Isso é feito usando o método `.then()` para lidar com a resolução
de uma Promise e retornar outra Promise. Por exemplo:

```javascript
minhaPromise
	.then((resultado) => {
		console.log(resultado);
		return outraPromise;
	})
	.then((resultado) => {
		console.log(resultado);
	})
	.catch((erro) => {
		console.error(erro);
	});
```

Neste exemplo, `minhaPromise` é resolvida e o resultado é capturado pelo método
`.then()`. Em seguida, `outraPromise` é retornada e resolvida, e o resultado é
capturado pelo próximo `.then()`. Se houver um erro em qualquer uma das
Promises, ele será capturado pelo método `.catch()`.

## Async/Await

O ES8 (ECMAScript 2017) introduziu as palavras-chave `async` e `await` para
simplificar o uso de Promises. A palavra-chave `async` é usada para declarar
uma função assíncrona, que retorna uma Promise. A palavra-chave `await` é usada
dentro de funções assíncronas para esperar a resolução de uma Promise.

Por exemplo:

```javascript
async function minhaFuncao() {
	let resultado = await minhaPromise;
	console.log(resultado);
}
```

Neste exemplo, a função `minhaFuncao()` é declarada como assíncrona e aguarda a
resolução da Promise `minhaPromise` usando a palavra-chave `await`. Quando a
Promise é resolvida, o resultado é armazenado na variável `resultado`.

## Exemplo AJaX com Promise

O código abaixo apresenta um exemplo completo de código escrito de AJaX escrito
por meio de uma Promise. Neste diretório, você também encontrará exemplos mais
simples do uso de Promise e async/await.

```sh
git clone -b dev https://github.com/rodrigoprestesmachado/cpw2
cd cpw2/exemplos/AJaX-promise
code .
```

## Exercícios do Freecode camp

* [Create a JavaScript Promise](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/es6/create-a-javascript-promise)

* [Complete a Promise with resolve and reject](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/es6/complete-a-promise-with-resolve-and-reject)

* [Handle a Fulfilled Promise with then](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/es6/handle-a-fulfilled-promise-with-then)

* [Use Arrow Functions to Write Concise Anonymous Functions](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/es6/use-arrow-functions-to-write-concise-anonymous-functions)

# Referências 📚

* [Promise](https://developer.mozilla.org/pt-BR/docs/Web/JavaScript/Reference/Global_Objects/Promise) no MDN Web Docs

* [Usando promises](https://developer.mozilla.org/pt-BR/docs/Web/JavaScript/Guide/Using_promises) no MDN Web Docs

<center>
<a href="https://rpmhub.dev" target="blanck"><img src="../imgs/logo.png" alt="Rodrigo Prestes Machado" width="3%" height="3%" border=0 style="border:0; text-decoration:none; outline:none"></a><br/>
<a rel="license" href="http://creativecommons.org/licenses/by/4.0/">CC BY 4.0 DEED</a>
