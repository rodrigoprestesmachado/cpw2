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
estrutura de um documento HTML ou XML como uma árvore de objetos. Cada
elemento, atributo e texto do documento vira um nó dessa árvore, e é isso que
permite que o JavaScript acesse e modifique o conteúdo, a estrutura e o
estilo de uma página dinamicamente.

**Nota:** XML, ou _Extensible Markup Language_ (Linguagem de Marcação
Extensível), é uma linguagem de marcação usada para representar dados de
forma estruturada. Ela foi projetada para ser autoexplicativa e flexível,
permitindo a definição de diferentes tipos de documentos e dados.

Para visualizar melhor, veja como o HTML abaixo é convertido em uma árvore de
nós:

```html
<html>
  <body>
    <h1>Título</h1>
    <p>Um parágrafo.</p>
  </body>
</html>
```

```text
html
└── body
    ├── h1  ("Título")
    └── p   ("Um parágrafo.")
```

O elemento `<html>` é a raiz da árvore. Ele tem um único filho, `<body>`, que
por sua vez tem dois filhos: `<h1>` e `<p>`. O texto dentro de cada tag
também é representado como um nó (um "text node").

Com essa estrutura em mente, o DOM oferece um conjunto de funcionalidades
para trabalhar com o documento:

1. **Representação hierárquica:** os elementos HTML/XML são organizados em
uma árvore, onde cada elemento é um nó.

2. **Acesso aos elementos:** é possível localizar elementos pelo ID, pela
classe, pela tag ou por outros atributos.

3. **Manipulação dinâmica:** é possível adicionar, remover e modificar
elementos e conteúdo da página usando métodos do DOM.

4. **Manipulação de estilo:** também é possível alterar o estilo dos
elementos, como cor, tamanho e posicionamento.

5. **Eventos e interação:** o DOM permite vincular eventos a elementos, como
cliques, passar o mouse ou pressionar teclas, tornando a página interativa.

Nas próximas seções, vamos ver na prática como selecionar elementos e como
manipular a estrutura e o estilo de uma página usando essas funcionalidades.

## Métodos de seleção

Antes de manipular um elemento, é preciso selecioná-lo. O DOM oferece
diferentes métodos para isso:

1. **[getElementById()](https://www.w3schools.com/jsref/met_document_getelementbyid.asp):**
seleciona um elemento pelo seu ID único.

2. **[getElementsByClassName()](https://www.w3schools.com/jsref/met_document_getelementsbyclassname.asp):**
seleciona todos os elementos que possuem determinada classe.

3. **[getElementsByTagName()](https://www.w3schools.com/jsref/met_document_getelementsbytagname.asp):**
seleciona todos os elementos de uma determinada tag.

4. **[querySelector()](https://www.w3schools.com/jsref/met_document_queryselector.asp):**
seleciona o primeiro elemento que corresponde a um seletor CSS.

O método `querySelector()` é o mais flexível, pois aceita qualquer seletor
CSS: ID, classe, tag, atributo, entre outros. Veja alguns exemplos:

```javascript
// por ID (usa #)
var titulo = document.querySelector("#titulo");

// por classe (usa .)
var paragrafo = document.querySelector(".paragrafo");

// por atributo
var elemento = document.querySelector("[data-id='123']");
```

## Manipulação da estrutura do HTML

Depois de selecionar um elemento, podemos criar, remover ou atualizar
conteúdo. O HTML abaixo será usado como base para os três exemplos a seguir:

```html
<!DOCTYPE html>
<html>
<head>
    <title>Manipulação do DOM</title>
</head>
<body>
    <h1 id="titulo">Manipulação do DOM</h1>
    <p id="paragrafo">Este é um parágrafo de exemplo.</p>

    <button onclick="adicionarParagrafo()">Adicionar Parágrafo</button>
    <button onclick="removerParagrafo()">Remover Parágrafo</button>
    <button onclick="atualizarTitulo()">Atualizar Título</button>

    <script>
        function adicionarParagrafo() {
            // cria um novo elemento <p>
            var novoParagrafo = document.createElement("p");
            novoParagrafo.textContent = "Novo parágrafo adicionado dinamicamente.";

            // adiciona o parágrafo ao final do corpo da página
            document.body.appendChild(novoParagrafo);
        }

        function removerParagrafo() {
            var paragrafo = document.getElementById("paragrafo");
            paragrafo.remove();
        }

        function atualizarTitulo() {
            var titulo = document.getElementById("titulo");
            titulo.textContent = "Novo Título Atualizado";
        }
    </script>
</body>
</html>
```

Cada função ilustra uma operação diferente sobre o mesmo documento:

* `adicionarParagrafo()` cria um novo elemento com
[createElement()](https://www.w3schools.com/jsref/met_document_createelement.asp)
e o insere no final do `<body>` com
[appendChild()](https://www.w3schools.com/jsref/met_node_appendchild.asp).

* `removerParagrafo()` localiza o parágrafo pelo ID e o remove do documento
com [remove()](https://www.w3schools.com/jsref/met_element_remove.asp).

* `atualizarTitulo()` localiza o título pelo ID e substitui seu texto usando
a propriedade `textContent`.

## Manipulação do estilo do HTML

Além do conteúdo, o DOM também permite alterar o estilo visual de um
elemento por meio da propriedade `style`. O exemplo a seguir mostra como
mudar a cor de fundo e o tamanho da fonte de um mesmo elemento:

```html
<!DOCTYPE html>
<html>
<head>
    <title>Alteração de Estilo</title>
    <style>
        .elemento {
            width: 200px;
            height: 100px;
            background-color: yellow;
            border: 1px solid black;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <div class="elemento">Elemento com estilo inicial</div>

    <button onclick="alterarCorFundo()">Alterar Cor de Fundo</button>
    <button onclick="alterarTamanhoFonte()">Alterar Tamanho da Fonte</button>

    <script>
        function alterarCorFundo() {
            var elemento = document.querySelector(".elemento");
            elemento.style.backgroundColor = "blue";
        }

        function alterarTamanhoFonte() {
            var elemento = document.querySelector(".elemento");
            elemento.style.fontSize = "24px";
        }
    </script>
</body>
</html>
```

Ao clicar em "Alterar Cor de Fundo", a cor do elemento muda para azul. Ao
clicar em "Alterar Tamanho da Fonte", o texto passa a ser exibido em 24px.
Note que o estilo é acessado e modificado por meio do atributo
[style](https://www.w3schools.com/TAGS/att_style.asp), da mesma forma como
fizemos com o conteúdo na seção anterior.

## Referências

* [DOM Tutorial](https://www.w3schools.com/js/js_htmldom.asp)

* MILETTO, Evandro Manara. [Desenvolvimento de software II: introdução ao desenvolvimento web com html, css, javascript e php](https://biblioteca.ifrs.edu.br/pergamum_ifrs/biblioteca_s/acesso_login.php?cod_acervo_acessibilidade=5020682&acesso=aHR0cHM6Ly9pbnRlZ3JhZGEubWluaGFiaWJsaW90ZWNhLmNvbS5ici9ib29rcy85Nzg4NTgyNjAxOTY5&label=acesso%20restrito). Porto Alegre Bookman 2014 1 recurso online ISBN 9788582601969.

<center>
<a href="https://rpmhub.dev" target="blanck"><img src="../imgs/logo.png" alt="Rodrigo Prestes Machado" width="3%" height="3%" border=0 style="border:0; text-decoration:none; outline:none"></a><br/>
<a rel="license" href="http://creativecommons.org/licenses/by/4.0/">CC BY 4.0 DEED</a>
</center>
