# 1ª Recuperação — CPW2

Rascunho para revisão. As questões se baseiam no [Simulado da 1ª parte](https://cpw2.rpmhub.dev/exercicios/simulados.html): variáveis (`let`/`const`), operadores e `if`, funções, eventos, DOM (`createElement`, `appendChild`, `textContent`) e AJAX com `XMLHttpRequest` e `JSON.parse`.

Cada questão é de múltipla escolha, com uma alternativa correta. A dificuldade não aparece no título; fica apenas no gabarito, para esta revisão.

| Distribuição | Questões |
| --- | --- |
| Fáceis (5) | Q01, Q02, Q03, Q04, Q05 |
| Médias (3) | Q06, Q07, Q08 |
| Difíceis (2) | Q09, Q10 |
| Com código (7) | Q01, Q02, Q04, Q06, Q07, Q09, Q10 |
| Conceituais (3) | Q03, Q05, Q08 |

---

## Q01 — Troca de valores com variável auxiliar

Qual é a saída exibida no console ao executar o código abaixo?

```javascript
let a = 10;
let b = 3;
let temp = a;
a = b;
b = temp;

console.log(a, b, temp);
```

- A) `3 10 10` **(correta)**
- B) `10 3 10`
- C) `3 10 3`
- D) `10 3 3`

**Gabarito:** A  
**Dificuldade:** fácil  
**Tipo:** código (variáveis)

**Feedback:** A questão pede o resultado de uma troca de valores entre `a` e `b` feita com uma variável auxiliar. `temp` recebe primeiro o valor original de `a`, que é `10`. Em seguida `a` recebe o valor de `b`, que é `3`, e `b` recebe o valor guardado em `temp`, que continua `10`. A variável auxiliar não é atualizada depois disso. O `console.log(a, b, temp)` exibe esses três valores na ordem final: `3 10 10`. Por isso a alternativa A está correta.

---

## Q02 — Variáveis let e const

O que acontece ao executar o código abaixo?

```javascript
let pontos = 0;
pontos = pontos + 1;
pontos++;

const CURSO = "CPW2";
CURSO = "WEB";

console.log(pontos, CURSO);
```

- A) Ocorre um `TypeError` na linha `CURSO = "WEB"` e o `console.log` não é executado. **(correta)**
- B) É exibido `2 WEB`.
- C) É exibido `2 CPW2`, porque a reatribuição de uma constante é ignorada.
- D) É exibido `1 CPW2`, porque `pontos++` não altera o valor.

**Gabarito:** A  
**Dificuldade:** fácil  
**Tipo:** código (variáveis)

**Feedback:** A questão observa o que o JavaScript faz quando um `let` é atualizado e, em seguida, um `const` recebe outro valor. `pontos` começa em `0`, a atribuição `pontos = pontos + 1` leva esse valor a `1` e `pontos++` leva a `2`. `CURSO` é declarado com `const` e fica ligado à string `"CPW2"`. A linha `CURSO = "WEB"` tenta fazer esse identificador apontar para outro valor. JavaScript recusa essa reatribuição e lança `TypeError: Assignment to constant variable`. O erro interrompe o script naquela linha, então o `console.log` não chega a ser executado. A alternativa A descreve esse comportamento.

---

## Q03 — Declaração com const

Qual afirmativa descreve corretamente o uso de `const` em JavaScript?

- A) Um identificador declarado com `const` pode receber outro valor depois, desde que o novo valor seja do mesmo tipo.
- B) `const` impede qualquer alteração, inclusive mudar as propriedades de um objeto já atribuído a esse identificador.
- C) Não é possível reatribuir o identificador declarado com `const`. Se o valor for um objeto, as propriedades desse objeto ainda podem ser alteradas. **(correta)**
- D) `const` só pode ser usado para números e strings, nunca para objetos ou arrays.

**Gabarito:** C  
**Dificuldade:** fácil  
**Tipo:** conceitual (variáveis)

**Feedback:** A questão pede a regra de uma declaração com `const`. O identificador fica ligado ao valor da inicialização e não pode passar a referir outro valor; uma tentativa de reatribuição gera `TypeError`. Essa restrição vale para o identificador, não para o interior do valor. Se o valor for um objeto ou um array, as propriedades ou os itens ainda podem ser alterados. A alternativa C é a que registra as duas partes dessa regra: o identificador não é reatribuído, e o conteúdo de um objeto atribuído a ele continua mutável.

---

## Q04 — Estrutura condicional if/else

Qual é a saída exibida no console ao executar o código abaixo?

```javascript
let idade = 17;

if (idade >= 18) {
  console.log("maior");
} else {
  console.log("menor");
}

console.log("fim");
```

- A) `menor` e, em seguida, `fim` **(correta)**
- B) apenas `menor`
- C) `maior` e, em seguida, `fim`
- D) apenas `fim`

**Gabarito:** A  
**Dificuldade:** fácil  
**Tipo:** código (estruturas de controle)

**Feedback:** A questão pede a saída de um `if/else` seguido de um `console.log` que está fora da estrutura. A condição `idade >= 18` compara `17` com `18` e é falsa, então o JavaScript executa o ramo `else` e exibe `menor`. O `console.log("fim")` vem depois do bloco, no fluxo normal do script, e também é executado. A saída é `menor` e, em seguida, `fim`. Por isso a alternativa A está correta.

---

## Q05 — Eventos no navegador

Em uma página, um botão é declarado assim:

```html
<button onclick="mostrar()">Enviar</button>
```

O que essa declaração estabelece?

- A) A função `mostrar` é executada assim que o navegador lê a tag do botão, durante o carregamento da página.
- B) A função `mostrar` deve ser chamada quando o usuário clicar naquele botão. **(correta)**
- C) O botão deixa de ser clicável e o clique passa a ser ignorado.
- D) O texto do botão é substituído pelo resultado de `mostrar` no momento em que a página abre.

**Gabarito:** B  
**Dificuldade:** fácil  
**Tipo:** conceitual (eventos)

**Feedback:** A questão pede o significado do atributo `onclick` em `<button onclick="mostrar()">Enviar</button>`. Esse atributo associa a função `mostrar` ao evento de clique daquele botão. A função permanece registrada até a ação acontecer: quando o usuário clica no botão, o navegador chama `mostrar`. A alternativa B descreve essa associação entre o clique e a chamada da função.

---

## Q06 — Lista criada a partir de um array

A página contém uma lista vazia `<ul id="lista"></ul>`. Qual é a saída exibida no console ao executar o script abaixo?

```javascript
const itens = ["Maçã", "Banana", "Laranja"];
const lista = document.getElementById("lista");

for (const i in itens) {
  const li = document.createElement("li");
  li.textContent = (i + 1) + ") " + itens[i];
  lista.appendChild(li);
}

console.log(lista.children.length);
console.log(lista.firstElementChild.textContent);
```

- A) `3` e `01) Maçã` **(correta)**
- B) `3` e `1) Maçã`
- C) `3` e `0) Maçã`
- D) `3` e `11) Banana`

**Gabarito:** A  
**Dificuldade:** média  
**Tipo:** código (DOM e array)

**Feedback:** A questão acompanha a criação de uma `<ul>` a partir do array `["Maçã", "Banana", "Laranja"]` com `for...in`. Esse laço percorre as chaves do array, que são os índices na forma de texto: `"0"`, `"1"` e `"2"`. Em cada volta, `itens[i]` é a fruta correspondente e `appendChild` insere um `<li>`, então a lista fica com 3 filhos. Como `i` é string, a expressão `i + 1` concatena em vez de somar: `"0" + 1` produz `"01"`. O texto do primeiro item é `01) Maçã`. `lista.children.length` vale `3` e `lista.firstElementChild.textContent` é `01) Maçã`, que é a alternativa A.

---

## Q07 — Funções, parâmetros e retorno

Qual é a saída exibida no console ao executar o código abaixo?

```javascript
function aplicar(valor, operacao) {
  return operacao(valor);
}

const dobrar = function (n) {
  return n * 2;
};

function somarUm(n) {
  return n + 1;
}

console.log(aplicar(5, dobrar), aplicar(5, somarUm));
```

- A) `10 6` **(correta)**
- B) `10 5`
- C) `5 6`
- D) `10 1`

**Gabarito:** A  
**Dificuldade:** média  
**Tipo:** código (funções)

**Feedback:** A questão pede o que `aplicar` devolve ao receber duas funções diferentes. `aplicar` chama a função recebida no parâmetro `operacao` e retorna o resultado dessa chamada. `dobrar` é uma função anônima guardada em uma variável; `dobrar(5)` executa `return n * 2` e devolve `10`. `somarUm(5)` executa `return n + 1` e devolve `6`. O `console.log` exibe esses dois retornos: `10 6`, que é a alternativa A.

---

## Q08 — Propriedade textContent

Qual alternativa descreve corretamente a atribuição `elemento.textContent = "Olá"`?

- A) O texto exibido pelo elemento passa a ser `Olá`, no lugar do texto que ele mostrava antes. **(correta)**
- B) A palavra `Olá` é acrescentada ao final do texto que o elemento já tinha.
- C) O atributo `id` do elemento passa a ser `Olá`, e o texto visível não muda.
- D) O elemento é apagado da página e outro é criado com a tag `Olá`.

**Gabarito:** A  
**Dificuldade:** média  
**Tipo:** conceitual (DOM)

**Feedback:** A questão pede o efeito de atribuir uma string à propriedade `textContent` de um elemento que já está na página. Essa atribuição substitui o texto daquele elemento: o que estava visível deixa de ser exibido e o elemento passa a mostrar `Olá`. A alternativa A descreve essa substituição do texto.

---

## Q09 — Requisição assíncrona e JSON

O arquivo `notas.json` existe no mesmo servidor. A resposta chega com status HTTP 200 e com o corpo `{"notas":[8, 5, 7, 4]}`. Qual é a sequência exibida no console ao chamar `mostrarNotas("notas.json")`?

```javascript
function mostrarNotas(url) {
  const xhr = new XMLHttpRequest();
  xhr.open("GET", url, true);

  xhr.onreadystatechange = function () {
    if (xhr.readyState !== 4) {
      return;
    }
    if (xhr.status !== 200) {
      console.log("erro", xhr.status);
      return;
    }
    const dados = JSON.parse(xhr.responseText);
    let soma = 0;
    for (const n of dados.notas) {
      if (n >= 7) {
        soma = soma + n;
      }
    }
    console.log("ok", soma, dados.notas.length);
  };

  console.log("inicio");
  xhr.send();
  console.log("fim");
}
```

- A) `inicio`, `fim`, `ok 15 4` **(correta)**
- B) `inicio`, `ok 15 4`, `fim`
- C) `inicio`, `fim`, `ok 24 4`
- D) `inicio`, `fim`, `erro 200`

**Gabarito:** A  
**Dificuldade:** difícil  
**Tipo:** código (AJAX, JSON e laço)

**Feedback:** A questão pede a ordem das mensagens de um GET assíncrono e o cálculo feito quando o JSON chega. Em `xhr.open("GET", url, true)`, o terceiro argumento deixa a requisição assíncrona: `xhr.send()` dispara o pedido e o script continua. Por isso o console exibe primeiro `inicio` e depois `fim`, ainda sem a resposta. Quando a resposta está completa, `readyState` vale `4`. O status informado é `200`, então o ramo `xhr.status !== 200` não é usado. `JSON.parse` converte o corpo `{"notas":[8, 5, 7, 4]}` no objeto com a propriedade `notas`. O `for...of` soma somente os valores maiores ou iguais a `7`, isto é `8 + 7 = 15`. O array continua com os quatro números, então `dados.notas.length` vale `4`. A mensagem do callback é `ok 15 4`. A sequência completa é `inicio`, `fim`, `ok 15 4`, que corresponde à alternativa A.

---

## Q10 — Criação e reorganização de elementos no DOM

A página contém apenas `<ul id="lista"></ul>`, sem espaços nem quebras de linha entre os itens que o script criar. O que será exibido no console?

```javascript
const itens = ["Maçã", "Banana", "Laranja"];
const lista = document.getElementById("lista");

for (const item of itens) {
  const li = document.createElement("li");
  li.textContent = item;
  lista.appendChild(li);
}

lista.lastElementChild.textContent = "Uva";
lista.removeChild(lista.firstElementChild);

const movido = lista.querySelector("li");
lista.appendChild(movido);

console.log(lista.children.length + " - " + lista.textContent);
```

- A) `2 - UvaBanana` **(correta)**
- B) `2 - BananaUva`
- C) `3 - BananaUvaBanana`
- D) `3 - MaçãBananaUva`

**Gabarito:** A  
**Dificuldade:** difícil  
**Tipo:** código (DOM)

**Feedback:** A questão pede o texto final da lista depois de criar os itens, alterar o último, remover o primeiro e reposicionar um nó que já está no DOM. O `for...of` cria três `<li>` e a lista fica `Maçã`, `Banana`, `Laranja`. `lastElementChild.textContent = "Uva"` muda o último item, e a lista passa a ser `Maçã`, `Banana`, `Uva`. `removeChild(lista.firstElementChild)` remove `Maçã`, restando `Banana` e `Uva`. `querySelector("li")` devolve o primeiro item que ainda está na lista, `Banana`. Como esse nó já pertence à `<ul>`, `appendChild` o move para o final em vez de criar uma cópia. A ordem final é `Uva`, `Banana`. A lista tem 2 filhos, e `textContent` junta o texto deles sem separador, produzindo `UvaBanana`. O `console.log` exibe `2 - UvaBanana`, que é a alternativa A.

---

## Gabarito resumido

| Questão | Título | Dificuldade | Tipo | Resposta |
| --- | --- | --- | --- | --- |
| Q01 | Troca de valores com variável auxiliar | fácil | código | A — `3 10 10` |
| Q02 | Variáveis let e const | fácil | código | A — `TypeError` antes do `console.log` |
| Q03 | Declaração com const | fácil | conceitual | C — não reatribui o identificador; objeto segue mutável |
| Q04 | Estrutura condicional if/else | fácil | código | A — `menor` e depois `fim` |
| Q05 | Eventos no navegador | fácil | conceitual | B — `mostrar` roda no clique |
| Q06 | Lista criada a partir de um array | média | código | A — `3` e `01) Maçã` |
| Q07 | Funções, parâmetros e retorno | média | código | A — `10 6` |
| Q08 | Propriedade textContent | média | conceitual | A — a atribuição substitui o texto do elemento |
| Q09 | Requisição assíncrona e JSON | difícil | código | A — `inicio`, `fim`, `ok 15 4` |
| Q10 | Criação e reorganização de elementos no DOM | difícil | código | A — `2 - UvaBanana` |
