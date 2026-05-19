---
layout: default
title: Vue
parent: Frameworks
nav_order: 21
---

# Vue.js

<center>
    <iframe src="https://cpw2.rpmhub.dev/vuejs/slides/index.html#/"
        title="Vue.js" width="90%" height="500" style="border:none;">
    </iframe>
</center>

Vue.js é um _framework_ JavaScript para a construção de interfaces de usuário.
Diferente de outras ferramentas que exigem que você reescreva todo o seu
projeto para adotá-las, o Vue.js foi projetado para ser **utilzado de forma
incremental**: você pode começar usando-o em apenas uma parte de uma página
existente e, aos poucos, expandir seu uso conforme a necessidade.
  
Para entender a proposta do Vue, pense em uma analogia com a construção civil:
se o HTML é a estrutura (paredes e fundação) e o CSS é o acabamento (pintura
e revestimentos), o JavaScript tradicional seria como instalar manualmente cada
interruptor e tomada. O Vue.js, por sua vez, funciona como um sistema de
automação residencial: você declara o que quer que aconteça ("quando essa luz
acender, abra a cortina") e ele cuida de manter tudo sincronizado
automaticamente. Esse mecanismo se chama **reatividade** e é o coração do Vue.

## Principais Diretivas 📜

Diretivas são instruções especiais que o Vue.js adiciona aos elementos HTML.
Elas sempre começam com `v-` e funcionam como "comandos" que dizem ao Vue
como aquele elemento deve se comportar. Pense nelas como **anotações mágicas**
no HTML que o Vue lê e interpreta.

Aqui estão as principais diretivas do Vue.js:

* `v-bind`: associa um atributo HTML ao valor de uma expressão Vue. Por exemplo,
  `v-bind:src="urlDaImagem"` faz com que o atributo `src` de uma `<img>` use
  o valor da variável `urlDaImagem`. É como dizer: "ei, esse atributo não é
  fixo, ele vem dos meus dados".
* `v-model`: vincula um elemento de formulário (como `<input>`) a uma variável
  Vue, criando uma **ligação de mão dupla**. Se o usuário digita algo, a
  variável se atualiza; se o código altera a variável, o campo se atualiza.
  É como ter um espelho entre o campo de texto e o dado armazenado.
* `v-if` e `v-else`: exibem ou ocultam um elemento com base em uma condição.
  Funcionam exatamente como um `if/else` da programação, mas aplicado
  diretamente ao HTML.
* `v-for`: renderiza uma lista de elementos com base em uma matriz de dados.
  É a maneira do Vue dizer: "para cada item dessa lista, crie um elemento
  HTML".
* `v-on`: associa um evento do DOM (como clique, teclado, mouse) a um método
  do Vue. Por exemplo, `v-on:click="salvar"` chama o método `salvar` quando
  o usuário clica no elemento. Existe um atalho muito usado para essa
  diretiva: `@click="salvar"`.

## Hello World 🌍

Vamos ao tradicional primeiro exemplo. O objetivo é exibir a mensagem
"Hello Vue in CPW2!" na tela usando Vue.js:

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.global.min.js">
    </script>
</head>
<body>
    <div id="app">
        {{ message }}
    </div>
    <script>
        // Vue 3
        const app = Vue.createApp({
            data() {
                return {
                    message: 'Hello Vue in CPW2!'
                }
            }
        })
        app.mount('#app')
    </script>
</body>
</html>
```

Vamos destrinchar esse exemplo passo a passo:

1. **Importação via CDN**: A tag `<script src="https://cdn.jsdelivr.net/...">`
   carrega o Vue.js diretamente da internet. Isso é ótimo para aprender ou
   prototipar, pois não exige nenhuma instalação. É como pedir um livro
   emprestado em vez de comprá-lo.

2. **O "container" da aplicação**: A `<div id="app">` é o território onde o
   Vue vai atuar. Tudo que estiver fora dessa `div` continua sendo HTML
   comum; tudo que estiver dentro pode usar a "mágica" do Vue.

3. **A sintaxe `{{ message }}`**: As chaves duplas são chamadas de
   **interpolação de texto** (ou "bigodes", do inglês _mustache_). Elas dizem
   ao Vue: "substitua isso aqui pelo valor da variável `message`". Se a
   variável mudar, o texto na tela muda sozinho.

4. **`Vue.createApp(...)`**: Cria uma nova aplicação Vue. Dentro dela, a
   função `data()` retorna um objeto com todas as variáveis reativas da
   aplicação. Por que `data` é uma função e não um objeto direto? Para
   garantir que cada instância do Vue tenha sua **própria cópia** dos dados
   (importante quando temos componentes reutilizáveis).

5. **`app.mount('#app')`**: Conecta a aplicação Vue ao elemento HTML com
   `id="app"`. É como plugar um aparelho na tomada: até esse momento, o Vue
   existe na memória, mas não está controlando nada na página.

O grande poder demonstrado aqui é a **reatividade**: se você abrir o console
do navegador e digitar `app._instance.data.message = 'Outra mensagem'`,
verá o texto na tela mudar imediatamente, sem precisar atualizar a página
ou manipular o DOM manualmente. Compare isso com o JavaScript puro, onde
você precisaria fazer algo como
`document.getElementById('app').innerText = 'Outra mensagem'` toda vez.

## Nuxt.js 🚀

À medida que uma aplicação Vue cresce, surgem necessidades comuns: como
organizar várias páginas? Como otimizar o carregamento? Como gerar HTML
no servidor para melhorar o SEO? Resolver tudo isso manualmente é trabalhoso
e repetitivo.

É aí que entra o **Nuxt.js**: um _framework_ construído **em cima** do Vue.js
que já vem com essas funcionalidades prontas. Uma boa analogia: se o Vue é
o motor de um carro, o Nuxt é o carro completo, com chassi, freios,
direção e ar-condicionado já montados.

O Nuxt.js oferece:

* **Roteamento automático** baseado na estrutura de arquivos;
* **Renderização no servidor (SSR)** para melhor SEO e performance;
* **Geração de sites estáticos** para sites de alta performance;
* **Auto-importação** de componentes e bibliotecas;
* **Sistema de módulos** para adicionar funcionalidades rapidamente.

Para criar uma aplicação com o Nuxt.js, use o comando
`npx nuxi@latest init`. Por exemplo:

```bash
npx nuxi@latest init <project-name>
```

> 📝 **Nota:** Substitua `<project-name>` pelo nome do seu projeto. O `npx` é
> um utilitário incluso no Node.js que permite executar comandos de pacotes
> diretamente, sem precisar instalá-los globalmente no seu computador.

### Roteamento 🛣️

Em aplicações Web tradicionais, para criar páginas diferentes (`/home`,
`/contato`, `/produtos`) você precisa configurar manualmente cada rota.
No Nuxt.js, o roteamento é **automático e baseado em arquivos**: cada
arquivo `.vue` dentro do diretório `pages` vira automaticamente uma rota
da aplicação.

A correspondência funciona assim:

| Arquivo                       | URL gerada       |
|-------------------------------|------------------|
| `pages/index.vue`             | `/`              |
| `pages/sobre.vue`             | `/sobre`         |
| `pages/livros/index.vue`      | `/livros`        |
| `pages/livros/cadastro.vue`   | `/livros/cadastro` |

Para ativar esse sistema, o arquivo `app.vue` (que é o "esqueleto" da
aplicação) deve conter o componente `<NuxtPage />`, que funciona como uma
"janela" onde a página atual será exibida:

```html
<template>
  <NuxtPage />
</template>
```

Pense no `<NuxtPage />` como o palco de um teatro: ele fica fixo, mas o
"ator" (a página atual) muda conforme a URL acessada pelo usuário.

### Execução 🚀

Para visualizar a aplicação Nuxt.js em modo de desenvolvimento, use o
comando:

```bash
npm run dev
```

Esse comando inicia um servidor local (geralmente em `http://localhost:3000`)
com **hot reload**: qualquer alteração no código é refletida automaticamente
no navegador, sem precisar atualizar a página manualmente.

A configuração desse comando está no arquivo `package.json`:

```json
"scripts": {
  "dev": "nuxt dev"
}
```

A seção `scripts` do `package.json` funciona como um conjunto de atalhos:
em vez de digitar `nuxt dev`, você digita `npm run dev`. Outros comandos
comuns no Nuxt são `npm run build` (para gerar a versão de produção) e
`npm run preview` (para visualizar a versão de produção localmente).

## Componentes 🧩

Os componentes são, sem dúvida, o conceito mais importante do Vue.js. Eles
permitem **dividir uma interface complexa em pedaços menores, independentes
e reutilizáveis** — como peças de LEGO que se encaixam para formar uma
construção maior.

Considere uma página de loja online: ela pode ser composta por um cabeçalho,
um menu lateral, uma lista de produtos (onde cada produto é um componente)
e um rodapé. Cada um desses pedaços pode ser desenvolvido, testado e
mantido de forma isolada, e ainda ser reutilizado em outras páginas da
aplicação.

No Nuxt, os componentes ficam no diretório `components` e podem ser usados
em qualquer parte da aplicação **sem precisar importá-los manualmente** —
o Nuxt faz isso automaticamente. Porém, por padrão, o Nuxt adiciona um
prefixo no nome do componente baseado em sua localização. Para manter o
nome original do componente, é necessário adicionar a opção `pathPrefix`
como `false` no arquivo `nuxt.config.js`:

```json
components: [
    {
        path: '~/components',
        pathPrefix: false,
    },
],
```

### Criando um Componente 🎨

Vamos criar um componente para um cenário prático: um **formulário de
cadastro de livros**. Esse componente poderá ser reutilizado em diferentes
páginas (cadastro inicial, edição, etc.).

O arquivo `~/components/BookForm.vue` ficaria assim:

```html
<template>
  <div>
    <h1>Cadastro de Livros:</h1>
    <input type="text" placeholder="Título do livro" v-model="title" />
    <input type="text" placeholder="Autor do livro" v-model="author" />
    <input type="text" placeholder="Ano de lançamento" v-model="year" />
    <button @click="salvar()">Salvar</button>
  </div>
</template>

<script>
export default {
  data() {
    return {
      title: "",
      author: "",
      year: "",
    };
  },
  methods: {
    salvar() {
      console.log("Salvando livro");
      this.$emit("bookSubmitted", {
        title: this.title,
        author: this.author,
        year: this.year,
      });
    },
  },
};
</script>
```

Vamos analisar cada parte desse componente:

**A seção `<template>`** define a estrutura HTML do componente. Note o uso
da diretiva `v-model` em cada `<input>`: ela cria uma ligação de mão dupla
entre o campo de texto e a variável correspondente em `data()`. Quando o
usuário digita "Dom Casmurro" no primeiro campo, a variável `title`
recebe esse valor automaticamente — não é preciso escrever código para
capturar o evento de digitação.

**A seção `<script>`** define o comportamento do componente:

* `data()` retorna o **estado inicial** do componente. As três variáveis
  começam como strings vazias e serão preenchidas conforme o usuário digita.
* `methods` é um objeto que agrupa as funções do componente. Aqui temos
  apenas o método `salvar`.

**O método `salvar`** faz duas coisas importantes:

1. Imprime "Salvando livro" no console (útil para depuração);
2. Executa `this.$emit("bookSubmitted", { ... })`.

Esse `$emit` merece atenção especial: ele **emite um evento personalizado**
chamado `bookSubmitted`, carregando como "carga" um objeto com os dados do
livro. Pense nisso como o componente filho gritando "ei, alguém terminou
de preencher o formulário, aqui estão os dados!". Quem precisa fazer algo
com esses dados (o componente pai) pode "ouvir" esse grito.

> 💡 **Por que usar eventos em vez de manipular dados diretamente?**
> Um princípio fundamental do Vue é o **fluxo de dados unidirecional**:
> dados descem (do pai para o filho via propriedades) e eventos sobem
> (do filho para o pai via `$emit`). Isso torna a aplicação mais previsível
> e fácil de depurar, já que um componente filho nunca altera diretamente
> os dados do pai.

### Usando o Componente 📥

Uma vez criado, o componente pode ser usado em qualquer página da aplicação.
Veja como utilizá-lo na página `pages/index.vue`:

```html
<template>
  <BookForm @bookSubmitted="execute" />
</template>

<script>
export default {
  data() {
    return {
      title: "",
    };
  },
  methods: {
    execute(data) {
      console.log(data);
    },
  },
};
</script>
```

Observe a linha `<BookForm @bookSubmitted="execute" />`. Ela faz duas coisas:

1. **Renderiza o componente** `BookForm` na página (lembre-se: graças à
   auto-importação do Nuxt, não precisamos de `import`);
2. **Escuta o evento `bookSubmitted`** com a sintaxe `@bookSubmitted="execute"`.
   Quando o componente filho emite esse evento, o método `execute` da página
   pai é chamado, recebendo como parâmetro o objeto com os dados do livro.

O fluxo completo é o seguinte:

```
[Usuário preenche o formulário no BookForm]
            ↓
[Usuário clica em "Salvar"]
            ↓
[BookForm chama o método salvar()]
            ↓
[salvar() emite o evento "bookSubmitted" com os dados]
            ↓
[A página index.vue escuta esse evento]
            ↓
[O método execute(data) é chamado com os dados do livro]
            ↓
[Os dados são impressos no console]
```

Em uma aplicação real, em vez de apenas imprimir no console, o método
`execute` poderia salvar os dados em um banco de dados via API, atualizar
uma lista de livros na tela, etc.

### Bulma.io 🎨

Por padrão, os elementos HTML têm aparência simples e pouco atraente.
Estilizar tudo manualmente com CSS é trabalhoso, especialmente se você
precisa que sua aplicação seja responsiva (se adapte a celulares, tablets
e desktops).

Frameworks CSS resolvem esse problema fornecendo **classes prontas** que
você apenas aplica aos seus elementos. O **Bulma** é um desses frameworks
e se destaca por ser leve, moderno e baseado em **Flexbox** (uma
tecnologia CSS para layouts flexíveis). Ele é uma alternativa mais simples
ao Bootstrap, sem dependência de JavaScript.

Para usar o Bulma em uma aplicação Nuxt.js, instale-o via npm:

```bash
npm install bulma
```

Depois, importe-o no arquivo `nuxt.config.js` para que esteja disponível
em toda a aplicação:

```javascript
css: [
    'bulma/css/bulma.css',
],
```

A partir daí, você pode usar as classes do Bulma diretamente nos seus
componentes. Por exemplo, para criar um botão estilizado, basta usar
`<button class="button is-primary">Salvar</button>` em vez do botão
simples. Não é preciso escrever uma linha de CSS personalizado.

### Font Awesome 🎨

Ícones são essenciais para uma boa experiência de usuário: eles tornam a
interface mais intuitiva e visualmente agradável. Em vez de criar ou
encontrar ícones individuais (e se preocupar com tamanho, cor, formato),
podemos usar uma biblioteca pronta de ícones vetoriais. O **Font Awesome**
é a mais popular delas e oferece milhares de ícones gratuitos que se
adaptam a qualquer tamanho sem perder qualidade (pois são vetoriais).

Para usar o Font Awesome em uma aplicação Nuxt.js, instale-o via npm:

```bash
npm install @fortawesome/fontawesome-free
```

Em seguida, importe-o no arquivo `nuxt.config.js`:

```javascript
css: [
    '@fortawesome/fontawesome-free/css/all.css',
],
```

Pronto! Agora, para usar um ícone, basta inserir um `<i>` com a classe
correspondente. Por exemplo, `<i class="fas fa-book"></i>` exibe um ícone
de livro. Você pode consultar todos os ícones disponíveis em
[fontawesome.com/icons](https://fontawesome.com/icons).

### Exemplo Completo 📦

Para ver uma aplicação Nuxt.js completa integrando tudo o que vimos
(componentes, Bulma e Font Awesome), clone o repositório de exemplo:

```bash
git clone -b dev https://github.com/rodrigoprestesmachado/cpw2
cd cpw2/exemplos/vue/nuxt/books
```

Depois, dentro do diretório do projeto, execute:

```bash
npm install
npm run dev
```

Explore o código e tente fazer pequenas modificações: alterar cores,
adicionar campos no formulário, criar novas páginas. A melhor forma de
aprender Vue.js é praticando.

## Referências 📚

* [O que é Vue.js?](https://www.w3schools.com/whatis/whatis_vue.asp) - W3CSchool
<!-- .element: style="margin-bottom:40px; font-size: 25px; color:white; font-family: arial;" -->

* [Vue.js](https://vuejs.org) - The Progressive JavaScript Framework
<!-- .element: style="margin-bottom:40px; font-size: 25px; color:white; font-family: arial;" -->

* [Nuxt.js](https://nuxt.com) - The Intuitive Vue Framework
<!-- .element: style="margin-bottom:40px; font-size: 25px; color:white; font-family: arial;" -->

* [Bulma](https://bulma.io) - Modern CSS framework based on Flexbox
<!-- .element: style="margin-bottom:40px; font-size: 25px; color:white; font-family: arial;" -->

<center>
<a href="https://rpmhub.dev" target="blanck"><img src="../imgs/logo.png" alt="Rodrigo Prestes Machado" width="3%" height="3%" border=0 style="border:0; text-decoration:none; outline:none"></a><br/>
<a rel="license" href="http://creativecommons.org/licenses/by/4.0/">CC BY 4.0 DEED</a>
