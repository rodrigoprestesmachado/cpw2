---
layout: default
title: Variáveis
parent: JavaScript Básico
nav_order: 12
---

# Variáveis

<center>
    <iframe src="https://cpw2.rpmhub.dev/variaveis/slides/index.html#/"
        title="Variáveis em JavaScript" width="90%" height="500"
        style="border:none;">
    </iframe>
</center>

Uma variável é um nome que guarda um valor no programa. Em vez de repetir o
mesmo número ou texto em vários lugares, você dá um nome a esse valor e o
reutiliza.

```javascript
let idade = 20;
idade = 21; // reatribuir: o nome idade passa a guardar 21
```

Declarar cria o nome. Atribuir coloca (ou troca) o valor. Se você declara sem
atribuir, o valor fica `undefined`:

```javascript
let cidade;
console.log(cidade); // undefined
cidade = "Porto Alegre";
```

### Regras de nome

JavaScript é *case-sensitive*: `idade` e `Idade` são variáveis diferentes. O
nome precisa começar com uma letra ou com `_` (underscore). Prefira nomes
descritivos, como `totalItens` em vez de `x`.

### let

Use `let` quando o valor puder mudar. Variáveis com `let` têm escopo de bloco:
só existem dentro das chaves `{ }` em que foram declaradas (por exemplo, um
`if` ou um `for`).

```javascript
if (true) {
  let x = 10;
  console.log(x); // 10
}
// console.log(x); // erro: x não existe fora do bloco
```

### const

Use `const` quando o nome não deve apontar para outro valor. Com `const` você
precisa atribuir na declaração, e não pode reatribuir:

```javascript
const PI = 3.14159;
// PI = 3; // erro: não é permitido reatribuir
```

`const` também tem escopo de bloco, como `let`. Atenção: em objetos e arrays,
`const` impede trocar a referência, mas **não** impede mudar propriedades ou
elementos:

```javascript
const pessoa = { nome: "Ana" };
pessoa.nome = "Bia"; // permitido
// pessoa = {}; // erro: reatribuir a variável não é permitido
```

### var (legado)

`var` é a forma antiga de declarar variáveis. Evite em código novo. Diferente
de `let` e `const`, `var` **não** respeita escopo de bloco: a variável “vaza”
para a função (ou para o escopo global):

```javascript
function exemplo() {
  if (true) {
    var x = 10;
  }
  console.log(x); // 10 (x ainda existe fora do if)
}
exemplo();
```

Você ainda encontra `var` em código legado e em exemplos antigos. Na prática
moderna, prefira `const` e `let`.

### Boas práticas

- Prefira `const` por padrão.
- Use `let` somente quando precisar reatribuir.
- Evite `var`.
- Escolha nomes claros e evite poluir o escopo global com muitas variáveis.

## Exercícios de Fixação do Freecodecamp

* [Declarando variáveis](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/declare-javascript-variables)

* [Armazenando valores com o operador de atribuição](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/storing-values-with-the-assignment-operator)

* [Atribuindo o valor de uma variável a outra](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/assigning-the-value-of-one-variable-to-another)

* [Inicializando Variáveis com o Operador de Atribuição](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/initializing-variables-with-the-assignment-operator)

* [Compreendendo variáveis não inicializadas](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/understanding-uninitialized-variables)

* [Entendendo variáveis case sensitivity](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/understanding-case-sensitivity-in-variables)

* [Explore as diferenças entre var e let](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/explore-differences-between-the-var-and-let-keywords)

## Exercícios de Fixação Práticos

1. [Troca de Valores](https://jsfiddle.net/prestesmachado/9nspe3u1/7/)

    Escreva um programa que troque (inverta) os valores de duas variáveis
    (a e b) e, em seguida, retorne o valor de b.

2. [Concatenação de Strings](https://jsfiddle.net/prestesmachado/nz20mpge/4/)

    Crie um programa que concatene duas strings e retorne uma única frase na
    função _main_.

## Exercício de Fixação Teórico 📚

<center>
    <iframe src="https://cpw2.rpmhub.dev/variaveis/slides/questions.html"
        title="Exercício de Fixação Teórico - Variáveis" width="90%" height="500"
        style="border:none;">
    </iframe>
</center>

## Referências 📚

* Comunidade [Discord](https://discord.com/invite/C29cqvm): canal `#cpw2`

* MDN [JavaScript basics](https://developer.mozilla.org/en-US/docs/Learn/Getting_started_with_the_web/JavaScript_basics)

* Tutorial de [JavaScript](http://www.w3schools.com/js) do W3C

* MILETTO, Evandro Manara. [Desenvolvimento de software II: introdução ao desenvolvimento web com html, css, javascript e php](https://biblioteca.ifrs.edu.br/pergamum_ifrs/biblioteca_s/acesso_login.php?cod_acervo_acessibilidade=5020682&acesso=aHR0cHM6Ly9pbnRlZ3JhZGEubWluaGFiaWJsaW90ZWNhLmNvbS5ici9ib29rcy85Nzg4NTgyNjAxOTY5&label=acesso%20restrito). Porto Alegre Bookman 2014 1 recurso online
ISBN 9788582601969.

<center>
    <a href="https://rpmhub.dev" target="blanck">
        <img src="../imgs/logo.png" alt="Rodrigo Prestes Machado" width="3%"
        height="3%" border=0 style="border:0; text-decoration:none;
        outline:none">
    </a>
    <br/>
    <a rel="license" href="http://creativecommons.org/licenses/by/4.0/">
        CC BY 4.0 DEED
    </a>
</center>
