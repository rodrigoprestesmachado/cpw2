---
layout: default
title: Estruturas de Controle
nav_order: 6
---

# Estruturas de controle

<center>
    <iframe src="https://cpw2.rpmhub.dev/controle/slides/index.html#/"
        title="Estruturas de Controle" width="90%" height="500"
        style="border:none;">
    </iframe>
</center>

## Resumo 📝

As estruturas de controle em JavaScript são usadas para controlar o fluxo de
execução do código. Elas incluem:

### Estruturas Condicionais

As estruturas condicionais permitem que o código tome decisões com base em
condições. As principais são:

#### If

```javascript
if (condição) {
    // Código a ser executado se a condição for verdadeira
} else if (outraCondição) {
    // Código a ser executado se a condição for falsa e a outra condição
    //for verdadeira
} else {
    // Código a ser executado se nenhuma das condições anteriores for
    // verdadeira
}
```

#### Switch

```javascript
switch (expressão) {
    case valor1:
        // Código a ser executado se expressão for igual a valor1
        break;
    case valor2:
        // Código a ser executado se expressão for igual a valor2
        break;
    default:
        // Código a ser executado se expressão não coincidir com nenhum dos casos anteriores
}
```

### Estruturas de Repetição

As estruturas de repetição permitem que o código seja executado repetidamente
enquanto uma condição for verdadeira. As principais são:

#### For

```javascript
for (inicialização; condição; incremento) {
    // Código a ser repetido enquanto a condição for verdadeira
}
```

#### While

```javascript
while (condição) {
    // Código a ser repetido enquanto a condição for verdadeira
}
```

#### Do...While

```javascript
do {
    // Código a ser repetido pelo menos uma vez e repetido enquanto a condição
    // for verdadeira
} while (condição);
```

#### For...In

O for ... in é usado para iterar sobre arrays e objetos. Por exemplo:

```javascript
for (chave in array/objeto) {
    // Código a ser executado para cada chave do array ou do objeto
}
```

#### For...Of (ES6)

O for ... of é usado para iterar sobre objetos iteráveis, como arrays, strings,
mapas, conjuntos, etc. Por exemplo:

```javascript
for (elemento of array/objeto) {
    // Código a ser executado para cada elemento do array ou do objeto
}
```

⚡ **Importante**: Note que o `for ... of` itera sobre um elemento,
enquanto o `for ... in` itera sobre as chaves.

### Outras Estruturas

#### Break

Usado para sair de um loop.

#### Continue

Usado para pular a iteração atual de um loop e continuar com a próxima.

#### Return

Usado para terminar a execução de uma função e especificar um valor para ser
retornado.

#### throw

Usado para lançar uma exceção. Quando uma exceção é lançada, a execução do
código é interrompida e o controle é passado para o primeiro bloco de código
de tratamento de exceção. Por exemplo:

```javascript
function divide(x, y) {
    if (y === 0) {
        throw new Error("Divisão por zero não é permitida.");
    }
    return x / y;
}

try {
    var resultado = divide(10, 0);
    console.log("O resultado da divisão é:", resultado);
} catch (error) {
    console.error("Ocorreu um erro:", error.message);
}
```

Neste exemplo, a função divide verifica se o divisor é zero. Se for, ela lança
uma exceção usando `throw new Error()`. No bloco `try`, chamamos a função divide
com argumentos que resultariam em divisão por zero. Como resultado, uma exceção
é lançada e capturada no bloco `catch`, onde podemos tratar o erro.

#### try ... catch

Captura e trata exceções. Por exemplo:

```javascript
function dividir(x, y) {
    if (y === 0) {
        throw new Error("Divisão por zero não é permitida.");
    }
    return x / y;
}

try {
    var resultado = dividir(10, 0);
    console.log("O resultado da divisão é:", resultado);
} catch (erro) {
    console.error("Ocorreu um erro:", erro.message);
}
```

Neste exemplo, a função dividir tenta dividir dois números. Se o divisor for
zero, uma exceção é lançada usando `throw new Error()`. No bloco try, chamamos
a função dividir com argumentos que resultariam em divisão por zero. Como
resultado, uma exceção é lançada e capturada no bloco `catch`, onde podemos
lidar com o erro e exibir uma mensagem personalizada.

## Exercícios do Freecodecamp 🎯

* [While](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/iterate-with-javascript-while-loops)

* [For](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/iterate-with-javascript-for-loops)

* [For ao contrário](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/count-backwards-with-a-for-loop)

* [Use lógica condicional com instruções If](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/use-conditional-logic-with-if-statements)

* [Ordem Lógica em declarações If Else](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/logical-order-in-if-else-statements)

* [Adicionando uma opção default nas instruções de switch](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/adding-a-default-option-in-switch-statements)

* [Substituição de cadeias If Else com Switch](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/replacing-if-else-chains-with-switch)

## Referências 📚

* Comunidade [Discord](https://discord.com/invite/C29cqvm): canal `#cpw2`

* MDN [JavaScript basics](https://developer.mozilla.org/en-US/docs/Learn/Getting_started_with_the_web/JavaScript_basics)

* Tutorial de [JavaScript](http://www.w3schools.com/js) do W3C

* MILETTO, Evandro Manara. [Desenvolvimento de software II: introdução ao desenvolvimento web com html, css, javascript e php](https://biblioteca.ifrs.edu.br/pergamum_ifrs/biblioteca_s/acesso_login.php?cod_acervo_acessibilidade=5020682&acesso=aHR0cHM6Ly9pbnRlZ3JhZGEubWluaGFiaWJsaW90ZWNhLmNvbS5ici9ib29rcy85Nzg4NTgyNjAxOTY5&label=acesso%20restrito). Porto Alegre Bookman 2014 1 recurso online ISBN 9788582601969.

<center>
<a href="https://github.com/rodrigoprestesmachado" target="blanck"><img src="../imgs/logo.png" alt="Rodrigo Prestes Machado" width="3%" height="3%" border=0 style="border:0; text-decoration:none; outline:none"></a><br/>
<a rel="license" href="http://creativecommons.org/licenses/by/4.0/">Creative Commons Atribuição 4.0 Internacional</a>
