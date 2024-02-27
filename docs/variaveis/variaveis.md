# Variáveis

<center>
    <iframe src="https://cpw2.rpmhub.dev/variaveis/slides/index.html#/"
        title="Variáveis em JavaScript" width="90%" height="500"
        style="border:none;">
    </iframe>
</center>

## Resumo

Em JavaScript, as variáveis são elementos fundamentais para armazenar e
manipular dados dentro de um programa. Elas servem como contêineres nomeados
para armazenar valores, como números, _strings_, objetos e muito mais. As
variáveis fornecem flexibilidade e dinamismo ao código, permitindo que os
desenvolvedores aloquem memória e atribuam valores a nomes específicos.

### Declaração de Variáveis

Em JavaScript, as variáveis podem ser declaradas usando as palavras-chave
`var`, `let` ou `const`.

- `var`: Constitui a forma tradicional de declarar variáveis em JavaScript, mas
foi suplantada pelo `let` e `const`. Variáveis declaradas com `var` têm escopo
de função ou escopo global, o que pode levar a comportamentos inesperados.

- `let`: Introduzido no ECMAScript 6 (ES6), o `let` permite que as variáveis
tenham escopo de bloco, o que significa que elas só são acessíveis dentro do
bloco em que são declaradas.

- `const`: Também introduzido no ES6, o `const` declara uma variável com um
valor constante, que não pode ser reatribuído. No entanto, para objetos e
arrays, o `const` não impede a modificação de suas propriedades ou elementos.

### Exemplos de Uso

```javascript
// Declarando variáveis usando var
var idade = 30;

// Declarando variáveis usando let
let nome = "João";

// Declarando constantes usando const
const PI = 3.14159;
```

Uma curiosidade sobre variáveis em JavaScript é que a palavra-chave `var` tem um
 comportamento peculiar em relação ao escopo. Ao contrário de `let` e `const`,
 que têm escopo de bloco, as variáveis declaradas com `var` têm escopo de função
  ou escopo global, o que pode levar a alguns comportamentos inesperados.

Por exemplo, ao declarar uma variável com `var` dentro de um bloco condicional
(`if`, `for`, `while`, etc.), a variável é visível em todo o escopo da função
mais próxima, em vez de estar restrita ao bloco em que foi declarada. Isso pode
causar confusão e _bugs_ difíceis de rastrear, especialmente em programas
grandes e complexos.

```javascript
function exemplo() {
  if (true) {
    var x = 10;
  }
  // Isso vai imprimir 10, mesmo que x tenha sido declarado dentro do bloco if
  console.log(x);
}
exemplo();
```

Essa peculiaridade do `var` levou muitos desenvolvedores a preferir o uso de
`let` e `const`, que têm um escopo mais previsível e geralmente são mais seguros
 de usar. No entanto, é importante estar ciente desse comportamento do `var` ao
 trabalhar com código legado ou ao encontrar exemplos mais antigos de JavaScript.

### Boas Práticas

- Escolha nomes descritivos para suas variáveis que reflitam seu propósito e
conteúdo.
- Prefira `let` e `const` em vez de `var`, pois eles oferecem um escopo mais
previsível.
- Use `const` para valores que não devem ser modificados e `let` para valores
que precisam ser reatribuídos.
- Evite poluir o escopo global com muitas variáveis, pois isso pode levar a
conflitos e bugs difíceis de depurar.

## Exercícios do Freecodecamp

* [Declarando variáveis](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/declare-javascript-variables)

* [Armazenando valores com o operador de atribuição](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/storing-values-with-the-assignment-operator)

* [Atribuindo o valor de uma variável a outra](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/assigning-the-value-of-one-variable-to-another)

* [Inicializando Variáveis com o Operador de Atribuição](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/initializing-variables-with-the-assignment-operator)

* [Compreendendo variáveis não inicializadas](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/understanding-uninitialized-variables)

* [Entendendo variáveis case sensitivity](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/understanding-case-sensitivity-in-variables)

* [Explore as diferenças entre var e let](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/explore-differences-between-the-var-and-let-keywords)

## Exercícios Práticos

1. [Troca de Valores](https://jsfiddle.net/prestesmachado/9nspe3u1/7/)

    Escreva um programa que troque (inverta) os valores de duas variáveis
    (a e b) e, em seguida, retorne o valor de b.

2. [Concatenação de Strings](https://jsfiddle.net/prestesmachado/nz20mpge/4/)

    Crie um programa que concatene duas strings e retorne uma única frase na
    função _main_.

## Referências

* Comunidade [Discord](https://discord.com/invite/C29cqvm): canal `#cpw2`

* MDN [JavaScript basics](https://developer.mozilla.org/en-US/docs/Learn/Getting_started_with_the_web/JavaScript_basics)

* Tutorial de [JavaScript](http://www.w3schools.com/js) do W3C

* MILETTO, Evandro Manara. [Desenvolvimento de software II: introdução ao desenvolvimento web com html, css, javascript e php](https://biblioteca.ifrs.edu.br/pergamum_ifrs/biblioteca_s/acesso_login.php?cod_acervo_acessibilidade=5020682&acesso=aHR0cHM6Ly9pbnRlZ3JhZGEubWluaGFiaWJsaW90ZWNhLmNvbS5ici9ib29rcy85Nzg4NTgyNjAxOTY5&label=acesso%20restrito). Porto Alegre Bookman 2014 1 recurso online
ISBN 9788582601969.

<center>
    <a href="https://github.com/rodrigoprestesmachado" target="blanck">
        <img src="../imgs/logo.png" alt="Rodrigo Prestes Machado" width="3%"
        height="3%" border=0 style="border:0; text-decoration:none;
        outline:none">
    </a>
    <br/>
    <a rel="license" href="http://creativecommons.org/licenses/by/4.0/">
        Creative Commons Atribuição 4.0 Internacional
    </a>
</center>
