---
layout: default
title:  Simulados: Primeira Parte
parent: Simulados
nav_order: 41
---

## Questões práticas — Variáveis

1. Em JavaScript, declare:
    * uma variável **`contador`** com `let`, iniciada em `0`;
    * incremente `contador` duas vezes (por exemplo com `contador = contador + 1` ou `contador++`);
    * declare uma constante **`TITULO`** com `const` contendo a string `"Simulado"`;
    * tente reatribuir `TITULO` a outra string e explique em um comentário no código o que acontece (ou por que você removeu essa linha após testar).
{: .fs-3 }

2. Escreva um trecho de código que:
    * declare `let a = 10` e `let b = 3`;
    * troque os valores de `a` e `b` usando uma **terceira** variável auxiliar (`let temp` ou nome à sua escolha), de forma que ao final `a` seja `3` e `b` seja `10`;
    * exiba `a` e `b` com `console.log` (ou `document.write`, se estiver no navegador) para conferir.
{: .fs-3 }

## Questões práticas — DOM e eventos

1. Escreva um pequeno script (JavaScript no navegador) que:
    * Assuma uma página com um elemento `<p id="texto">Olá!</p>` e um botão `<button id="btn">Alterar</button>`.
    * Ao clicar no botão, o texto do parágrafo deve mudar para `"Texto atualizado"`.
    * Associe o clique ao botão usando o atributo **`onclick`** no HTML **ou** a propriedade `onclick` do elemento obtido em JavaScript (por exemplo `document.getElementById("btn").onclick = ...`).
{: .fs-3 }

2. Dado um array JavaScript `const itens = ["Maçã", "Banana", "Laranja"];` e uma `<ul id="lista"></ul>` vazia no HTML, escreva o código que:
    * Para cada string do array, cria um `<li>`, define seu texto e adiciona o `<li>` à `<ul>`.
    * Use `createElement` e `appendChild` (ou equivalente).
{: .fs-3 }

3. Crie um trecho HTML com um `<input type="text" id="nome">` e um botão. Ao clicar no botão, o valor digitado no input deve ser exibido dentro de um `<p id="saida"></p>` (por exemplo, prefixado com `"Olá, "` e sufixado com `"!"`). Trate o caso de campo vazio exibindo uma mensagem à sua escolha.
{: .fs-3 }

## Questões práticas — AJAX (XMLHttpRequest)

1. Escreva um script que use **`XMLHttpRequest`** para fazer um **GET** assíncrono a uma `url` (por exemplo, um arquivo de texto `.txt` ou `.html` no mesmo servidor). Quando a resposta estiver pronta e o status HTTP indicar sucesso, coloque o **texto bruto** da resposta (`responseText`) dentro de um elemento `<p id="resultado"></p>`. Em caso de erro de rede ou status HTTP de erro, mostre uma mensagem à sua escolha nesse mesmo parágrafo ou em `console.error`. Use `open`, `send` e trate o retorno com `onreadystatechange` (ou `onload` / `onerror`). Não use `fetch`, `Promise`, `async`/`await` nem `.then()`.
{: .fs-3 }

2. A partir do exercício anterior, suponha que a `url` devolva um **JSON válido** (por exemplo um array de objetos ou um único objeto). Após obter `responseText` com sucesso, use **`JSON.parse`** para converter em valor JavaScript e exiba no DOM pelo menos **um** campo desse dado (por exemplo o primeiro item ou uma propriedade), ainda **sem** encapsular tudo em uma função com `callbackSucesso` e `callbackErro`. Trate `JSON.parse` com `try/catch` se o texto não for JSON válido.
{: .fs-3 }

3. Implemente uma função `buscarJson(url, callbackSucesso, callbackErro)` que use **`XMLHttpRequest`** para fazer um **GET** assíncrono a `url`. A função deve:
    * Chamar `callbackSucesso(dados)` com o **objeto** obtido ao analisar o corpo da resposta como JSON (use `JSON.parse` no texto da resposta quando o status indicar sucesso).
    * Chamar `callbackErro(mensagem)` em falha de rede, status HTTP de erro ou texto que não seja JSON válido.
    * Não use `fetch`, `Promise`, `async`/`await` nem `.then()` — apenas a API clássica de `XMLHttpRequest` e funções de callback.
{: .fs-3 }

## Questões teóricas

### Variáveis

1. Em JavaScript, qual palavra-chave é usada para declarar uma variável cujo valor pode ser reatribuído depois da declaração?
* A) `const`
* B) `static`
* C) `let`
* D) `fixed`
{: .fs-3 }

2. Qual afirmativa sobre `const` está correta?
* A) Com `const`, o identificador pode ser reatribuído a outro valor.
* B) `const` só pode ser usado dentro de funções.
* C) Com `const`, não se pode reatribuir o identificador a um novo valor (embora objetos possam ter propriedades mutáveis).
* D) `const` cria variáveis globais automaticamente em qualquer escopo.
{: .fs-3 }

3. Em `let nome = "Ana"`, o **identificador** `nome` é, sobretudo:
* A) O valor `"Ana"` armazenado na memória
* B) O tipo `string` fixado pelo compilador
* C) Um operador da linguagem
* D) O rótulo da variável no código, pelo qual o programa acessa o valor
{: .fs-3 }

### Tipos

4. Qual dos seguintes tipos primitivos **não** existe em JavaScript?
* A) String
* B) Number
* C) Character
* D) Boolean
{: .fs-3 }

5. Qual é o resultado de `typeof null` em JavaScript?
* A) `"null"`
* B) `"undefined"`
* C) `"object"`
* D) `"number"`
{: .fs-3 }

6. Em JavaScript, a tipagem é, em geral, classificada como:
* A) Dinâmica: o tipo está ligado ao valor em tempo de execução
* B) Estática: o tipo deve ser escrito em toda declaração
* C) Só numérica: não há texto nem booleanos
* D) Fixa após a primeira atribuição e não pode mudar nunca
{: .fs-3 }

### Operadores

7. O operador `===` em JavaScript compara:
* A) apenas valor, convertendo tipos se necessário
* B) valor e tipo, sem conversão de tipo
* C) apenas tipo
* D) endereço de memória
{: .fs-3 }

8. Em JavaScript, qual operador “lógico E” (AND) é usado para combinar duas condições booleanas?
* A) `||`
* B) `&&`
* C) `&`
* D) `AND`
{: .fs-3 }

9. Usa-se com frequência `===` em vez de `==` quando se deseja comparar valores **sem** depender de:
* A) números inteiros
* B) strings vazias
* C) conversões automáticas de tipo que podem gerar resultados inesperados
* D) operadores lógicos
{: .fs-3 }

### Estruturas de controle

10. Qual será o resultado do código abaixo?
{: .fs-3 }

```javascript
let x = 5;
if (x > 3) {
  console.log("Maior que 3");
} else {
  console.log("Menor ou igual a 3");
}
```
{: .fs-3 }

* A) Nada acontece
* B) Exibe “Maior que 3”
* C) Exibe “Menor ou igual a 3”
* D) Erro de sintaxe
{: .fs-3 }

11. Qual estrutura é mais adequada para executar um bloco de código **uma vez para cada** elemento de um array, sem gerenciar manualmente um índice `i`?
* A) `if / else`
* B) `switch`
* C) `for...of` (ou métodos como `forEach`, conforme o estilo ensinado)
* D) `while (true)`
{: .fs-3 }

12. A condição entre parênteses em `if (condicao) { ... }` é uma expressão cujo resultado é usado como:
* A) sempre um número inteiro
* B) obrigatoriamente uma string
* C) definição de uma nova variável global
* D) valor verdadeiro ou falso (no sentido de *truthy* / *falsy*) para escolher o ramo
{: .fs-3 }

### Funções

13. Em JavaScript, qual das seguintes formas envolve **função anônima** (função sem nome na declaração)?
* A) `function soma(a, b) { return a + b; }`
* B) `let sub = function(a, b) { return a - b; };`
* C) `const mult = (a, b) => a * b;`
* D) As alternativas B e C
{: .fs-3 }

14. Qual afirmativa sobre funções em JavaScript é verdadeira?
* A) Funções podem ser atribuídas a variáveis
* B) Toda função deve retornar um valor obrigatoriamente
* C) Funções não podem receber outras funções como argumento
* D) Funções não podem ser definidas dentro de outras funções
{: .fs-3 }

15. Uma **função** em JavaScript costuma ser descrita como um bloco que:
* A) só pode ser chamada uma vez durante toda a execução do programa
* B) pode ser invocada várias vezes, recebendo argumentos e podendo devolver um resultado com `return`
* C) não aceita parâmetros nem retorno
* D) existe apenas para comentar o código
{: .fs-3 }

### Eventos

16. Em JavaScript no navegador, **eventos** são, em geral, associados a:
* A) Apenas erros de sintaxe no código
* B) Declaração de variáveis com `let` ou `const`
* C) Ações do usuário ou notificações do ambiente (clique, tecla, carregamento da página, etc.)
* D) Compilação de folhas de estilo CSS
{: .fs-3 }

17. Qual nome de evento em JavaScript é o mais associado a “o usuário pressionou e soltou o botão do mouse sobre um elemento”?
* A) `load`
* B) `click`
* C) `mouseover`
* D) `change`
{: .fs-3 }

18. Em HTML, um botão pode ser declarado assim: `<button onclick="minhaFuncao()">Enviar</button>`. O que essa forma de uso representa, em termos gerais?
* A) Um comentário que o navegador ignora
* B) Definir o estilo do botão apenas com JavaScript, sem CSS
* C) Impedir que o botão seja clicável
* D) Indicar que `minhaFuncao` deve ser chamada quando ocorrer o clique naquele botão
{: .fs-3 }

19. O atributo `onload` (por exemplo em `<body onload="...">` ou ligado à janela) costuma ser usado para executar código quando:
* A) o usuário pressiona qualquer tecla
* B) o mouse passa sobre um link
* C) um campo de texto recebe foco
* D) o carregamento da página (ou do recurso associado) foi concluído
{: .fs-3 }

20. Qual nome de evento é o mais adequado para reagir ao **envio** de um `<form>` (por exemplo, ao acionar o botão de submeter)?
* A) `submit`
* B) `click`
* C) `load`
* D) `keydown`
{: .fs-3 }

21. Na interface web, a ideia de **tratar um evento** (por exemplo com `onclick` ou outro mecanismo) significa, em essência:
* A) executar código em resposta a algo que aconteceu (como um clique ou o carregamento)
* B) apagar o HTML da página
* C) desativar o JavaScript no navegador
* D) converter automaticamente CSS em JavaScript
{: .fs-3 }

### Document Object Model

22. O que retorna `document.getElementById("app")` quando **não** existe elemento com `id="app"` na página?
* A) `undefined`
* B) `null`
* C) Um objeto vazio `{}`
* D) Lança sempre uma exceção
{: .fs-3 }

23. Qual método seleciona **o primeiro** elemento que corresponde a um seletor CSS (por exemplo, `".item"` ou `"#principal"`)?
* A) `getElementsByClassName`
* B) `getElementById`
* C) `querySelectorAll`
* D) `querySelector`
{: .fs-3 }

24. Para criar um novo elemento `<div>` em JavaScript e inseri-lo como filho de um nó `pai`, quais passos são típicos?
* A) `document.createElement("div")` e depois `pai.appendChild(novoNo)`
* B) `document.newDiv()` e depois `pai.add(novoNo)`
* C) `innerHTML` no `document` sem criar nó
* D) `document.append("div")` apenas
{: .fs-3 }

25. A propriedade `element.textContent` difere de `element.innerHTML` principalmente porque:
* A) `textContent` interpreta tags HTML e as executa
* B) `innerHTML` sempre retorna só texto puro, sem marcação
* C) `textContent` trata o conteúdo como texto, sem interpretar HTML como marcação
* D) não há diferença prática
{: .fs-3 }

26. O **DOM** (Document Object Model) de uma página carregada no navegador é, em linhas gerais:
* A) uma representação em árvore dos elementos que o script pode percorrer e modificar
* B) apenas o arquivo `.css` vinculado
* C) o banco de dados do site
* D) a lista de extensões instaladas no navegador
{: .fs-3 }

### Asynchronous JavaScript and XML (AJAX)

27. Em páginas web, a ideia central de **AJAX** é:
* A) Substituir HTML por XML em todos os arquivos do site
* B) Desativar JavaScript no navegador
* C) Sincronizar automaticamente o banco de dados com o CSS
* D) Trocar dados com o servidor (por exemplo via HTTP) e atualizar a página **sem** recarregar o documento inteiro, quando possível
{: .fs-3 }

28. Com um objeto `xhr` do tipo `XMLHttpRequest`, após configurar a requisição e chamar `xhr.send()`, onde costuma estar o **corpo textual** da resposta retornada pelo servidor?
* A) `xhr.statusText` apenas
* B) `xhr.responseText`
* C) `xhr.json`
* D) `document.body`
{: .fs-3 }

29. Para transformar uma **string** no formato JSON em um **objeto** JavaScript utilizável no código, qual função é a adequada?
* A) `JSON.parse`
* B) `JSON.stringify`
* C) `Object.keys`
* D) `Array.isArray`
{: .fs-3 }

30. Uma requisição HTTP feita com `XMLHttpRequest` de forma **assíncrona** é assim chamada porque:
* A) o navegador encerra a página imediatamente
* B) o programa não precisa “travar” esperando a resposta na mesma linha: o resultado é tratado depois, em callbacks
* C) não usa rede
* D) só pode ser feita em servidores FTP
{: .fs-3 }
