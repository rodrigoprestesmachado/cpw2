---
layout: default
title: Web Storage
parent: Conceitos Transversais
nav_order: 32
---

# Web Storage

<center>
<iframe src="https://cpw2.rpmhub.dev/web-storage/slides/index.html#/" title="Web Storage" width="90%" height="500" style="border:none;"></iframe>
</center>

## Introdução

A API Web Storage fornece mecanismos pelos quais os navegadores podem
armazenar pares de chave/valor de forma local, sem precisar recorrer a um
servidor. As chaves e os valores armazenados são sempre `strings`, mesmo que
você tente guardar outro tipo de dado (por exemplo, um número ou um objeto).
Você pode acessar esses valores como faria com um objeto comum ou, de forma
mais explícita, usando os métodos `Storage.getItem()` e `Storage.setItem()`.
{: .fs-3 }

## sessionStorage e localStorage

A API Web Storage disponibiliza dois mecanismos de armazenamento, acessíveis
através das propriedades `Window.sessionStorage` e `Window.localStorage`. Ao
serem chamados pela primeira vez em um documento, ambos retornam um objeto
[Storage](https://developer.mozilla.org/pt-BR/docs/Web/API/Storage), que pode
ser manipulado da mesma maneira nos dois casos, porém de forma isolada, ou
seja, os dados de um não são visíveis pelo outro.
{: .fs-3 }

* O **sessionStorage** mantém uma área de armazenamento separada para cada
  origem diferente (cada combinação de protocolo, domínio e porta). Essa área
  fica disponível somente durante a sessão da página, ou seja, enquanto a aba
  do navegador permanecer aberta, incluindo recarregamentos e restaurações de
  páginas. Ao fechar a aba, os dados são perdidos.
  {: .fs-3 }

* O **localStorage** funciona da mesma forma, mas os dados armazenados
  continuam existindo mesmo depois de o navegador ser fechado e reaberto, ou
  seja, os dados persistem até serem explicitamente removidos (pelo código ou
  pelo usuário).
  {: .fs-3 }

## Principais métodos do objeto Storage

Tanto `sessionStorage` quanto `localStorage` implementam a mesma interface
`Storage`, com os seguintes métodos principais:
{: .fs-3 }

* `setItem(chave, valor)`: adiciona um par chave/valor ao armazenamento ou
  atualiza o valor de uma chave já existente.
* `getItem(chave)`: retorna o valor associado a uma chave. Caso a chave não
  exista, retorna `null`.
* `removeItem(chave)`: remove o par chave/valor associado à chave informada.
* `clear()`: remove todos os pares chave/valor armazenados.
{: .fs-3 }

```javascript
// Armazena um valor
localStorage.setItem("nome", "Rodrigo");

// Recupera um valor
console.log(localStorage.getItem("nome")); // Rodrigo

// Remove uma chave específica
localStorage.removeItem("nome");

// Remove todos os valores armazenados
localStorage.clear();
```
{: .fs-3 }

## Exemplo prático

O exemplo a seguir mostra uma página que permite ao usuário escolher uma cor
de fundo. Essa cor é salva no `localStorage` sempre que o usuário altera o
seletor de cores e é recuperada assim que a página é carregada novamente,
fazendo com que a cor escolhida persista entre recarregamentos e até mesmo
depois de fechar e reabrir o navegador:
{: .fs-3 }

```html
<body onload="load()">
  <p id="text">Web storage</p>
  <label for="color">Cor do fundo: </label>
  <input type="color" id="color" onblur="changeColor()" />

  <script>
    /**
     * Troca a cor do fundo da página
     */
    function changeColor() {
      let inputColor = document.getElementById("color");
      document.body.style.backgroundColor = inputColor.value;

      // Armazena no localStorage
      localStorage.setItem("color", inputColor.value);
    }

    /**
     * Inicializa o localStorage
     */
    function load() {
      document.body.style.backgroundColor = localStorage.getItem("color");
    }
  </script>
</body>
```
{: .fs-3 }

Observe que a função `changeColor()` é chamada sempre que o usuário sai do
campo de cor (evento `onblur`) e usa `localStorage.setItem()` para persistir
o valor escolhido. Já a função `load()` é executada quando a página termina
de carregar (evento `onload`) e usa `localStorage.getItem()` para recuperar a
cor salva anteriormente, aplicando-a como cor de fundo da página.
{: .fs-3 }

## Exercício de Fixação Teórico sobre Web Storage 📚

<center>
    <iframe src="https://cpw2.rpmhub.dev/web-storage/slides/questions.html"
        title="Exercício de Fixação Teórico - Web Storage" width="90%" height="500"
        style="border:none;">
    </iframe>
</center>

# Referências 📚

* [Usando a API Web Storage](https://developer.mozilla.org/pt-BR/docs/Web/API/Web_Storage_API/Using_the_Web_Storage_API) no MDN Web Docs

<center>
<a href="https://rpmhub.dev" target="blanck"><img src="../imgs/logo.png" alt="Rodrigo Prestes Machado" width="3%" height="3%" border=0 style="border:0; text-decoration:none; outline:none"></a><br/>
<a rel="license" href="http://creativecommons.org/licenses/by/4.0/">CC BY 4.0 DEED</a>
