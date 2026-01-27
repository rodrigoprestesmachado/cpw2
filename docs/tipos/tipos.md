---
layout: default
title: Tipos
parent: JavaScript
nav_order: 13
---

# Tipos

<center>
<iframe src="https://cpw2.rpmhub.dev/tipos/slides/index.html#/" title="Tipos" width="90%" height="500" style="border:none;"></iframe>
</center>

JavaScript é uma linguagem de programação dinâmica e tipada fracamente, o que
significa que as variáveis podem armazenar diferentes tipos de dados. Aqui estão
os principais tipos de dados em JavaScript:

### 1. Números (Numbers)

Representam valores numéricos. Podem ser inteiros ou de ponto flutuante. Os
números também podem ser escritos em base hexadecimal (base 16), octal (base 8)
e binária (base 2). Por exemplo:

* 10 (decimal)
* 0x10 (hexadecimal)
* 010 (octal)
* 0b10 (binário)

Os números em ponto flutuante podem ser escritos com notação exponencial. Por
exemplo: 1.5e2, ou seja, 1.5 x 10^2 = 150.

### 2. Strings

Sequências de caracteres, delimitadas por aspas simples ('') ou duplas ("").

Um exemplo de string é "Hello World!". As pode ser concatenadas com o operador +.

### 3. Booleanos

Representam um valor verdadeiro (true) ou falso (false).

### 4. Undefined

Representa uma variável que foi declarada, mas ainda não recebeu um valor.

### 5. Null

Representa a ausência intencional de qualquer valor ou objeto.

### 6. Symbol (a partir do ECMAScript 6)

Representa um valor único e imutável que pode ser usado como chave de
propriedade de um objeto.

## Tipos de Referência

### 1. Arrays

Objetos especiais usados para armazenar múltiplos valores em uma única variável,
acessados por um índice. Por exemplo:

```javascript
let frutas = ['Maçã', 'Banana', 'Laranja'];
```

Os arrays são objetos, assim, porem ser instanciados com a palavra-chave `new`.

```javascript
let frutas = new Array('Maçã', 'Banana', 'Laranja');
```

Para acessar um elemento do array, usamos a notação de colchetes `[]`:

```javascript
console.log(frutas[0]); // Maçã
```

Algumas propriedades e métodos de arrays:

* `length`: retorna o número de elementos no array.
* `push()`: adiciona um ou mais elementos ao final do array.
* `pop()`: remove o último elemento do array.
* `shift()`: remove o primeiro elemento do array.

Para utilizar uma  propriedade ou método de um array, usamos a notação de ponto:

```javascript
console.log(frutas.length); // 3
```

```javascript
frutas.push('Uva');
console.log(frutas); // ['Maçã', 'Banana', 'Laranja', 'Uva']
```

### 2. Data

Tipos de objetos que representam datas e horários. Alguns exemplos:

* `Date()`: cria um objeto Date com a data e hora atuais.
* `Date(0)`: cria um objeto Date com a data e hora 0 (1 de janeiro de 1970).
* `Date('2021-09-01')`: cria um objeto Date com a data 1 de setembro de 2021.

```javascript
let hoje = new Date();
console.log(hoje); // data e hora atuais
```

```javascript
let nascimento = new Date('1990-01-01');
console.log(nascimento); // 1 de janeiro de 1990
```

### 3. Objetos (Objects)

Representam coleções de pares chave-valor, onde as chaves são strings e os
valores podem ser de qualquer tipo de dado, incluindo outros objetos.

### 4. Funções

São objetos que incluem um bloco de código executável e podem ser invocados.


## Exercícios do Freecodecamp 🎯

* [Crie números decimais com JavaScript](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/create-decimal-numbers-with-javascript)

* [Declare variáveis do tipo String](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/declare-string-variables)

* [Sequências de escape em strings](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/escape-sequences-in-strings)

* [Escaping Literal Quotes in Strings](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/escaping-literal-quotes-in-strings)

* [Use colchetes para encontrar o primeiro caractere em uma string](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/use-bracket-notation-to-find-the-first-character-in-a-string)

* [Use colchetes para encontrar o enésimo caractere em uma string](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/use-bracket-notation-to-find-the-nth-to-last-character-in-a-string)

* [Encontre o tamanho da string](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/find-the-length-of-a-string)

* [Entenda valores booleanos](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/understanding-boolean-values)

## Exercícios Práticos 🛠

1. [Trabalhando com Arrays](https://jsfiddle.net/prestesmachado/8Lkbcjre/)
    Escreva uma função em JavaScript que receba um array de números como entrada
    e retorne a média aritmética dos números presentes no array.

2. [Manipulação de Strings](https://jsfiddle.net/prestesmachado/75zfLcxn/5/)
    Escreva uma função em JavaScript que receba uma string como entrada e
    retorne o número de vogais presentes na string.

3. [Contagem de Letras Únicas](https://jsfiddle.net/prestesmachado/8Lkbcjre/4/)
    Escreva uma função em JavaScript que conte quantas letras únicas estão
    presentes em uma string. Por exemplo, a string "banana" contém 3 letras
    ou a string "paralelepípedo" contém 7 letras únicas.

## Referências 📚

* Comunidade [Discord](https://discord.com/invite/C29cqvm): canal `#cpw2`

* MDN [JavaScript basics](https://developer.mozilla.org/en-US/docs/Learn/Getting_started_with_the_web/JavaScript_basics)

* Tutorial de [JavaScript](http://www.w3schools.com/js) do W3C

* MILETTO, Evandro Manara. [Desenvolvimento de software II: introdução ao desenvolvimento web com html, css, javascript e php](https://biblioteca.ifrs.edu.br/pergamum_ifrs/biblioteca_s/acesso_login.php?cod_acervo_acessibilidade=5020682&acesso=aHR0cHM6Ly9pbnRlZ3JhZGEubWluaGFiaWJsaW90ZWNhLmNvbS5ici9ib29rcy85Nzg4NTgyNjAxOTY5&label=acesso%20restrito). Porto Alegre Bookman 2014 1 recurso online ISBN 9788582601969.

<center>
<a href="https://rpmhub.dev" target="blanck"><img src="../imgs/logo.png" alt="Rodrigo Prestes Machado" width="3%" height="3%" border=0 style="border:0; text-decoration:none; outline:none"></a><br/>
<a rel="license" href="http://creativecommons.org/licenses/by/4.0/">CC BY 4.0 DEED</a>