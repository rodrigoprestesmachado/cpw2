---
layout: default
title: Funções
parent: JavaScript Básico
nav_order: 16
---

# Funções
<center>
<iframe src="https://cpw2.rpmhub.dev/funcoes/slides/index.html#/" title="Funções" width="90%" height="500" style="border:none;"></iframe>
</center>

As funções em JavaScript são blocos de código que executam uma tarefa específica
quando chamados. Elas são fundamentais para organizar e reutilizar o código,
além de permitirem a criação de funcionalidades mais complexas. Aqui está um
resumo das principais características das funções em JavaScript:

### Declaração de Funções

- As funções podem ser declaradas usando a palavra-chave `function`.

- Exemplo de declaração de função:

```javascript
function minhaFuncao(parametro1, parametro2) {
    // corpo da função
}
```

### Chamada de Funções

- As funções são chamadas pelo seu nome, seguido por parênteses `()`.

- Exemplo de chamada de função:

```javascript
minhaFuncao(valor1, valor2);
```

### Parâmetros e Argumentos

- Parâmetros são variáveis listadas na declaração da função.

- Argumentos são valores passados para a função quando ela é chamada.

- Exemplo de uso de parâmetros:

```javascript
    function somar(a, b) {
        return a + b;
    }
    let resultado = somar(3, 5); // resultado é 8
```

### Retorno de Valores

- As funções podem retornar valores usando a palavra-chave `return`.

- Exemplo de retorno de valor:

```javascript
    function quadrado(numero) {
        return numero * numero;
    }
    let resultado = quadrado(4); // resultado é 16
```

### Funções Anônimas e Arrow Functions:

- Funções anônimas não têm um nome definido e são frequentemente usadas como
argumentos de outras funções.

- Arrow functions são uma sintaxe mais curta e moderna para declarar funções.

- Exemplos:

```javascript
    // Função anônima
    let soma = function(a, b) {
        return a + b;
    };

    // Arrow function
    let quadrado = (numero) => {
        return numero * numero;
    };
```

### Escopo de Funções

- As variáveis declaradas dentro de uma função têm escopo local, ou seja, só
podem ser acessadas dentro da própria função.

- Variáveis declaradas fora de uma função têm escopo global e podem ser
acessadas de qualquer lugar do código.

## Exercícios do Freecodecamp

* [Atribuindo valores para uma função](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/passing-values-to-functions-with-arguments)

* [Escopo global em funções](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/global-scope-and-functions)

* [Escopo local em funções](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/local-scope-and-functions)

* [Escopo global vs. local em funções](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/global-vs--local-scope-in-functions)

* [Retornando um valor de uma função](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/return-a-value-from-a-function-with-return)

* [Entenda sobre valores undefined de uma função](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/understanding-undefined-value-returned-from-a-function)

# Referências

* Comunidade [Discord](https://discord.com/invite/C29cqvm): canal `#cpw2`

* MDN [JavaScript basics](https://developer.mozilla.org/en-US/docs/Learn/Getting_started_with_the_web/JavaScript_basics)

* Tutorial de [JavaScript](http://www.w3schools.com/js) do W3C

* MILETTO, Evandro Manara. [Desenvolvimento de software II: introdução ao desenvolvimento web com html, css, javascript e php](https://biblioteca.ifrs.edu.br/pergamum_ifrs/biblioteca_s/acesso_login.php?cod_acervo_acessibilidade=5020682&acesso=aHR0cHM6Ly9pbnRlZ3JhZGEubWluaGFiaWJsaW90ZWNhLmNvbS5ici9ib29rcy85Nzg4NTgyNjAxOTY5&label=acesso%20restrito). Porto Alegre Bookman 2014 1 recurso online ISBN 9788582601969.

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