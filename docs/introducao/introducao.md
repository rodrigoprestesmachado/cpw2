---
layout: default
title: Introdução
nav_order: 11
---

# Introdução

<center>
    <iframe src="https://cpw2.rpmhub.dev/introducao/intro/index.html#/"
        title="Introdução" width="90%" height="500" style="border:none;">
    </iframe>
</center>

## Resumo

JavaScript é uma linguagem de programação versátil e amplamente
utilizada para criar interatividade em páginas da Web. Desenvolvida
originalmente por Brendan Eich enquanto trabalhava na Netscape Communications
Corporation em 1995, JavaScript é um dos alicerces da internet moderna,
permitindo aos desenvolvedores criar experiências interativas e dinâmicas para
os usuários.

JavaScript é padronizado pela ECMA International. A primeira versão padronizada
foi o ECMAScript 1 em 1997. Desde então, a linguagem tem evoluído com novas
funcionalidades e atualizações regulares, como o ECMAScript 6 (também conhecido
como ES6 ou ES2015), lançado em 2015.

Uma das características mais poderosas do JavaScript é sua capacidade de
executar operações de forma assíncrona, permitindo que o código continue a ser
executado enquanto aguarda operações de I/O, como solicitações de rede ou
acesso a um banco de dados. Isso é fundamental para a criação de aplicativos Web
rápidos e responsivos, e é uma das razões pelas quais o JavaScript é tão
amplamente utilizado.

⚡ **Importante**: Uma operação assíncrona não bloqueia a execução do código,
assim, ela é executada em segundo plano, sem interromper o fluxo de execução
de outras operações.

Outra característica de JavaScript é sua capacidade de poder
ser executado diretamente no navegador do usuário, o que significa que não é
necessário nenhum software adicional para interpretar o código. Isso torna o
JavaScript uma ferramenta poderosa para adicionar comportamentos dinâmicos às
páginas da Web, como animações, validação de formulários, manipulação do DOM
(Modelo de Objeto de Documento) e muito mais.

Além de sua presença no lado do cliente, o JavaScript também é amplamente
utilizado no desenvolvimento do lado do servidor, graças a tecnologias como o
Node.js. Isso permite que os desenvolvedores usem JavaScript em todo o stack de
desenvolvimento Web, simplificando muitas vezes o fluxo de trabalho e
facilitando a criação de aplicativos Web escaláveis e eficientes.

JavaScript também pode ser usado para criar aplicativos móveis, graças a
tecnologias como o [React Native](https://reactnative.dev) e o
[Apache Cordova](https://cordova.apache.org), que permitem que os
desenvolvedores criem aplicativos nativos para iOS e Android usando JavaScript
e outras tecnologias da Web.

Ao longo dos anos, o ecossistema JavaScript cresceu significativamente, com o
surgimento de uma vasta gama de bibliotecas e frameworks, como
[React](https://react.dev), [Angular](https://angularjs.org) e
[Vue.js](https://vuejs.org), que facilitam o processo de desenvolvimento e
permitem a criação de aplicativos Web. Além disso, ambientes de desenvolvimento
como o [Visual Studio Code](https://code.visualstudio.com) ajudam os
desenvolvedores a escrever, depurar e testar código JavaScript de forma mais
eficiente.

JavaScript influenciou o design de muitas outras linguagens de programação
modernas, incluindo Python, Ruby e Swift. Por exemplo, a sintaxe de blocos de
código condicional "if-else" em Python foi inspirada em JavaScript.

JavaScript é uma das linguagens de programação mais populares do mundo.
É amplamente utilizado tanto por grandes empresas quanto por desenvolvedores
independentes, e possui uma comunidade muito ativa que contribui co
bibliotecas, _frameworks_ e recursos educacionais.

## Hello World em JavaScript

Os _slides_ abaixo mostram maneiras distintas de escrever os primeiros códigos
em JavaScript:

<center>
    <iframe src="https://cpw2.rpmhub.dev/introducao/hello/index.html#/"
        title="Hello World" width="90%" height="500" style="border:none;">
    </iframe>
</center>

## Executando JavaScript no VSCode com Live Server

### Pré-requisitos

1. Certifique-se de ter o Visual Studio Code instalado em seu computador.
Você pode baixá-lo e instalá-lo a partir do
[site oficial](https://code.visualstudio.com/).

2. Tenha o Node.js instalado em seu sistema. Você pode baixá-lo e instalá-lo
a partir do [site oficial](https://nodejs.org/).

3. Instale a extensão Live Server no Visual Studio Code. Você pode fazer isso
indo para a barra lateral do VSCode, clicando no ícone de extensões
(quatro quadrados empilhados) e pesquisando por "Live Server". Clique em
"Instalar" ao lado da extensão.

### Passos para Executar JavaScript usando o VSCode e Live Server

1. **Crie um novo arquivo JavaScript**:

* Abra o VSCode.

* Crie um novo arquivo clicando em "File" > "New File" ou pressionando
`Ctrl + N`.
* Salve o arquivo com uma extensão `.js`, por exemplo, `script.js`. Você
pode escolher qualquer nome que desejar.

1. **Escreva seu código JavaScript**:
   * No arquivo `script.js`, escreva o código JavaScript que deseja executar.
   Por exemplo:

    ```javascript
    console.log("Olá, mundo!");
    ```

2. **Abra o arquivo com o Live Server**:
   * Clique com o botão direito do mouse no arquivo `script.js`.
   * Selecione "Open with Live Server" no menu suspenso.
   * Uma nova guia do navegador será aberta automaticamente, exibindo o
   resultado da execução do seu script JavaScript.

3. **Visualize o console do navegador**:
   * Se você tiver o console do desenvolvedor aberto no navegador, poderá ver a
   saída do console do seu script JavaScript.
   * No Chrome, você pode abrir o console clicando com o botão direito do mouse
   na página e selecionando "Inspecionar" e depois procure na aba "Console".

4. **Edite e atualize seu código**:
   * Se fizer alterações no seu arquivo JavaScript, o Live Server atualizará
   automaticamente a página do navegador para refletir essas alterações.

## Depuração com VSCode e Chrome

<center>
    <iframe width="560" height="315"
    src="https://www.youtube.com/embed/HLyR2PNLnRA" title="YouTube video player"
    frameborder="0" allow="accelerometer; autoplay; clipboard-write;
    encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
    </iframe>
</center>

## Exercício Prático

1. [Hello, World! em JavaScript](https://jsfiddle.net/prestesmachado/g1s0df9r/2/)

    Utilizando o ambiente do [JSFidle](https://jsfiddle.net), escreva um pequeno
    programa em JavaScript que retorne a mensagem "Hello, World" na função
    _main_.

    **Dicas:**
    * O código deve ser implementado no editor de código JavaScript do JSFifle e
    o resultado dos testes (correção automática) pode ser visualizado na
    janela do navegador. Caso o código esteja correto, uma mensagem em verde
    aparecerá no navegador informando que o teste foi bem sucedido.

    * Você pode fazer um "_fork_" (no menu superior) para que o exemplo fique
    salvo na sua conta do JSFiddle.

## Referências 📚

* Comunidade [Discord](https://discord.com/invite/C29cqvm): canal `#cpw2`

* MDN [JavaScript basics](https://developer.mozilla.org/en-US/docs/Learn/Getting_started_with_the_Web/JavaScript_basics)

* Tutorial de [JavaScript](http://www.w3schools.com/js) do W3C

* MILETTO, Evandro Manara. [Desenvolvimento de software II: introdução ao desenvolvimento Web com html, css, javascript e php](https://biblioteca.ifrs.edu.br/pergamum_ifrs/biblioteca_s/acesso_login.php?cod_acervo_acessibilidade=5020682&acesso=aHR0cHM6Ly9pbnRlZ3JhZGEubWluaGFiaWJsaW90ZWNhLmNvbS5ici9ib29rcy85Nzg4NTgyNjAxOTY5&label=acesso%20restrito). Porto Alegre Bookman 2014 1 recurso online ISBN 9788582601969.

<center>
    <a href="https://github.com/rodrigoprestesmachado" target="blanck">
        <img src="../imgs/logo.png" alt="Rodrigo Prestes Machado" width="3%"
        height="3%" border=0 style="border:0; text-decoration:none;
        outline:none">
    </a>
    <br/>
    <a rel="license" href="http://creativecommons.org/licenses/by/4.0/">
        CC BY 4.0 DEED
    </a>
</center>
