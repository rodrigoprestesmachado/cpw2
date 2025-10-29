---
layout: default
title: Document Object Model
parent: JavaScript Básico
nav_order: 31
---

# Document Object Model (DOM)

<center>
    <iframe src="https://cpw2.rpmhub.dev/dom/slides/index.html#/"
        title="Document Object Model" width="90%" height="500"
        style="border:none;">
    </iframe>
</center>

O Document Object Model (DOM) é uma interface de programação que representa a
estrutura de um documento HTML ou XML como uma árvore de objetos. Essa estrutura
hierárquica permite que os programas acessem e manipulem dinamicamente o
conteúdo, a estrutura e o estilo de uma página Web ou de um documento XML.
{: .fs-3 }

---
**Nota:** XML, ou _Extensible Markup Language_ (Linguagem de Marcação Extensível),
trata-se de uma linguagem de marcação utilizada para representar dados de forma
estruturada. O XML é projetado para ser autoexplicativa e flexível, permitindo
a definição de diferentes tipos de documentos e dados.
{: .fs-3 }

--

Em termos simples, o DOM converte a estrutura do documento em um conjunto de
objetos que os programas podem interagir. Cada elemento, atributo e texto no
documento é representado por um nó na árvore DOM, o que facilita a
manipulação desses elementos por meio de JavaScript.
{: .fs-3 }

Principais características e funcionalidades do DOM incluem:
{: .fs-3 }

1. **Representação Hierárquica:** Os elementos HTML/XML são organizados em uma
estrutura de árvore, onde cada elemento é representado por um nó.
{: .fs-3 }

2. **Acesso aos Elementos:** O DOM permite que os programas acessem elementos
individuais do documento, seja pelo seu ID, classe, tipo ou outros atributos.
{: .fs-3 }

3. **Manipulação Dinâmica:** É possível adicionar, remover e modificar elementos
e conteúdo da página usando métodos do DOM.
{: .fs-3 }

4. **Manipulação de Estilo:** O DOM também permite modificar o estilo dos
elementos, alterando propriedades como cor, tamanho, posicionamento, etc.
{: .fs-3 }

5. **Eventos e Interação:** O DOM suporta a vinculação de eventos a elementos,
como cliques, _mouseovers_, teclas pressionadas, entre outros, permitindo
interações dinâmicas com a página.
{: .fs-3 }

Assim, o DOM é uma representação programática da estrutura de um documento
HTML/XML, permitindo que os desenvolvedores manipulem e interajam dinamicamente
com os elementos da página Web ou do documento XML.
{: .fs-3 }

## Métodos de seleção

Os métodos de seleção de elementos do DOM permitem que os desenvolvedores
selecionem elementos específicos de um documento HTML com base em diferentes
critérios, como ID, classe, tag, etc. Alguns dos métodos de seleção mais
comuns incluem:
{: .fs-3 }

1. **[getElementById()](https://www.w3schools.com/jsref/met_document_getelementbyid.asp):**
Seleciona um elemento pelo seu ID único.
{: .fs-3 }

2. **[getElementsByClassName()](https://www.w3schools.com/jsref/met_document_getelementsbyclassname.asp):**
Seleciona elementos por sua classe.
{: .fs-3 }

3. **[getElementsByTagName()](https://www.w3schools.com/jsref/met_document_getelementsbytagname.asp):**
Seleciona elementos por sua tag.
{: .fs-3 }

4. **[querySelector()](https://www.w3schools.com/jsref/met_document_queryselector.asp):**
Seleciona o primeiro elemento que corresponde a um seletor CSS.
{: .fs-3 }

Sobre o método `querySelector()`, ele permite selecionar elementos com base em
qualquer seletor CSS, como ID, classe, tag, atributo, etc. Por exemplo, para
selecionar um elemento com um ID específico, você pode usar o seletor `#id`,
enquanto para selecionar um elemento com uma classe específica, você pode usar
o seletor `.classe`. Observe alguns exemplos:
{: .fs-3 }

```javascript
// Seleciona o elemento com o ID "titulo"
var titulo = document.querySelector("#titulo");

// Seleciona o primeiro elemento com a classe "paragrafo"
var paragrafo = document.querySelector(".paragrafo");

// Seleciona o primeiro elemento <p> dentro de um elemento com a classe "conteudo"
var paragrafo = document.querySelector(".conteudo p");

// Seleciona o primeiro elemento com o atributo "data-id" igual a "123"
var elemento = document.querySelector("[data-id='123']");
```
{: .fs-3 }

## Manipulação da Estrutura do HTML

Abaixo estão alguns exemplos de como manipular a estrutura de um documento HTML
usando JavaScript e o DOM.
{: .fs-3 }

### Adicionar Elemento ao Documento HTML:

```html
<!DOCTYPE html>
<html>
<head>
    <title>Manipulação do DOM</title>
</head>
<body>
    <h1 id="titulo">Manipulação do DOM</h1>
    <button onclick="adicionarParagrafo()">Adicionar Parágrafo</button>

    <script>
        function adicionarParagrafo() {
            // Cria um novo elemento <p>
            var novoParagrafo = document.createElement("p");

            // Adiciona texto ao parágrafo
            novoParagrafo.textContent = "Este é um novo parágrafo adicionado dinamicamente.";

            // Adiciona o parágrafo ao final do corpo da página
            document.body.appendChild(novoParagrafo);
        }
    </script>
</body>
</html>
```
{: .fs-3 }

Neste exemplo, quando o botão "Adicionar Parágrafo" é clicado, um novo parágrafo
é adicionado ao final do corpo da página.
{: .fs-3 }

### Remover Elemento do Documento HTML:

```html
<!DOCTYPE html>
<html>
<head>
    <title>Manipulação do DOM</title>
</head>
<body>
    <h1 id="titulo">Manipulação do DOM</h1>
    <button onclick="removerParagrafo()">Remover Parágrafo</button>
    <p id="paragrafo">Este é um parágrafo que pode ser removido.</p>

    <script>
        function removerParagrafo() {
            // Seleciona o parágrafo a ser removido pelo seu ID
            var paragrafo = document.getElementById("paragrafo");

            // Remove o parágrafo do documento
            paragrafo.remove();
        }
    </script>
</body>
</html>
```
{: .fs-3 }

Neste exemplo, quando o botão "Remover Parágrafo" é clicado, o parágrafo com o
ID "paragrafo" é removido do documento. O método
`[remove()]`(https://www.w3schools.com/jsref/met_element_remove.asp) elimina
um elemento (ou nó) do documento.
{: .fs-3 }

### Atualizar Conteúdo de um Elemento do Documento HTML:

```html
<!DOCTYPE html>
<html>
<head>
    <title>Manipulação do DOM</title>
</head>
<body>
    <h1 id="titulo">Manipulação do DOM</h1>
    <button onclick="atualizarTitulo()">Atualizar Título</button>

    <script>
        function atualizarTitulo() {
            // Seleciona o elemento do título pelo seu ID
            var titulo = document.getElementById("titulo");

            // Atualiza o texto do título
            titulo.textContent = "Novo Título Atualizado";
        }
    </script>
</body>
</html>
```
{: .fs-3 }

Neste exemplo, quando o botão "Atualizar Título" é clicado, o texto do elemento 
de título é atualizado dinamicamente para "Novo Título Atualizado".
{: .fs-3 }

## Manipulação do Estilo do HTML

Abaixo estão alguns exemplos de como manipular o estilo de um documento HTML
usando JavaScript e o DOM.
{: .fs-3 }

### Alterar Cor de Fundo de um Elemento:

```html
<!DOCTYPE html>
<html>
<head>
    <title>Alteração de Estilo</title>
    <style>
        /* Estilo inicial do elemento */
        .elemento {
            width: 200px;
            height: 100px;
            background-color: yellow;
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <div class="elemento">Elemento com estilo inicial</div>
    <button onclick="alterarCorFundo()">Alterar Cor de Fundo</button>

    <script>
        function alterarCorFundo() {
            // Seleciona o elemento pelo seletor de classe
            var elemento = document.querySelector(".elemento");

            // Altera a cor de fundo do elemento
            elemento.style.backgroundColor = "blue";
        }
    </script>
</body>
</html>
```
{: .fs-3 }

Neste exemplo, quando o botão "Alterar Cor de Fundo" é clicado, a cor de fundo
do elemento com a classe "elemento" é alterada para azul. Note que o estilo
de um elemento pode ser acessado e modificado por meio do atributo
`[style](https://www.w3schools.com/TAGS/att_style.asp)`.
{: .fs-3 }

### Alterar Tamanho de Fonte de um Elemento:

```html
<!DOCTYPE html>
<html>
<head>
    <title>Alteração de Estilo</title>
    <style>
        /* Estilo inicial do elemento */
        .elemento {
            font-size: 16px;
            line-height: 1.5;
        }
    </style>
</head>
<body>
    <div class="elemento">Texto com estilo inicial</div>
    <button onclick="alterarTamanhoFonte()">Alterar Tamanho da Fonte</button>

    <script>
        function alterarTamanhoFonte() {
            // Seleciona o elemento pelo seletor de classe
            var elemento = document.querySelector(".elemento");

            // Altera o tamanho da fonte do elemento
            elemento.style.fontSize = "20px";
        }
    </script>
</body>
</html>
```
{: .fs-3 }

Neste exemplo, quando o botão "Alterar Tamanho da Fonte" é clicado, o tamanho da
fonte do elemento com a classe "elemento" é alterado para 20px.
{: .fs-3 }

## Referências

* [DOM Tutorial](https://www.w3schools.com/js/js_htmldom.asp)

* MILETTO, Evandro Manara. [Desenvolvimento de software II: introdução ao desenvolvimento web com html, css, javascript e php](https://biblioteca.ifrs.edu.br/pergamum_ifrs/biblioteca_s/acesso_login.php?cod_acervo_acessibilidade=5020682&acesso=aHR0cHM6Ly9pbnRlZ3JhZGEubWluaGFiaWJsaW90ZWNhLmNvbS5ici9ib29rcy85Nzg4NTgyNjAxOTY5&label=acesso%20restrito). Porto Alegre Bookman 2014 1 recurso online ISBN 9788582601969.

<center>
<a href="https://rpmhub.dev" target="blanck"><img src="../imgs/logo.png" alt="Rodrigo Prestes Machado" width="3%" height="3%" border=0 style="border:0; text-decoration:none; outline:none"></a><br/>
<a rel="license" href="http://creativecommons.org/licenses/by/4.0/">CC BY 4.0 DEED</a>
