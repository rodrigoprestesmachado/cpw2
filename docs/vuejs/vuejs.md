---
layout: default
title: Vue.js
parent: Vue e Promise
nav_order: 31
---

# Vue.js

<center>
    <iframe src="https://cpw2.rpmhub.dev/vuejs/slides/index.html#/"
        title="Vue.js" width="90%" height="500" style="border:none;">
    </iframe>
</center>

Vue.js é um _framework_ JavaScript para a construção de interfaces de usuário. Ele
é projetado para ser adotado de forma incremental e pode ser facilmente
integrado a outros projetos e bibliotecas JavaScript. Vue.js é uma ferramenta
poderosa para a criação de aplicações web interativas e dinâmicas.

## Principais Diretivas 📜

Vue.js fornece um conjunto de diretivas que podem ser usadas para manipular o
DOM de forma declarativa. Aqui estão algumas das principais diretivas do Vue.js:

* `v-bind`: associa um atributo HTML ao valor de uma expressão Vue.
* `v-model`: vincula um elemento de formulário a uma variável Vue.
* `v-if` e `v-else`: exibe ou oculta um elemento com base em uma condição.
* `v-for`: renderiza uma lista de elementos com base em uma matriz de dados.
* `v-on`: associa um evento do DOM a um método no Vue.


## Hello World 🌍

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

Neste exemplo, criamos uma instância Vue chamada `app` e a associamos a um
elemento HTML com o ID `app`. O objeto `data` contém uma propriedade `message`
que é exibida na página usando a sintaxe de interpolação `{{ message }}`.

O interessante neste exemplo é que o Vue.js é importado diretamente do CDN
(Content Delivery Network) do Vue.js. Isso significa que você pode começar a
usar o Vue.js em um projeto sem precisar instalar nada localmente.

Além disso, o Vue.js é uma biblioteca progressiva, o que significa que você pode
adotar o Vue.js de forma incremental em um projeto existente, sem a necessidade
de reescrever todo o código.

Outra característica importante do Vue.js é a sua reatividade. Quando os dados
associados a uma instância Vue são alterados, a interface do usuário é
automaticamente atualizada para refletir essas alterações. Isso torna o Vue.js
uma ferramenta poderosa para a criação de interfaces de usuário dinâmicas.

## Exercício 1: Lista de Tarefas

Objetivo: Criar uma lista de tarefas simples em Vue.

Criar uma lista de tarefas em Vue que:
	1.	Renderize uma lista a partir de um array.
	2.	Mostre cada item dinamicamente com v-for.


## Nuxt.js 🚀

O Nuxt.js é um framework Vue.js para a criação de aplicações Web universais. Ele
fornece uma estrutura robusta para o desenvolvimento de aplicações em cima
do Vue.js. O Nuxt.js simplifica a criação de aplicações Vue.js, fornecendo
recursos como roteamento, geração de páginas estáticas, pré-renderização e
muito mais.

Para criar uma aplicação com o Nuxt.js, você pode usar o comando
`npx nuxi@latest init`. Por exemplo:

```bash
npx nuxi@latest init <project-name>
```

Nota: Substitua `<project-name>` pelo nome do seu projeto. O `npx` é um pacote
incluso no Node.js que permite executar comandos de pacotes diretamente.

### Roteamento 🛣️

Para fazer o roteamento de páginas em uma aplicação Nuxt.js, você pode criar
arquivos `.vue` dentro do diretório `pages`. Cada arquivo `.vue` representa uma
página da aplicação. O Nuxt.js gera automaticamente o roteamento com base nos
arquivos presentes no diretório `pages`.

Para fazer isso, você deve colocar no arquivo `app.vue` o seguinte código:

```html
<template>
  <NuxtPage />
</template>
```

Logo, crie o diretório `pages` e adicione um arquivo `.vue` para cada página da
aplicação. Por exemplo, para criar uma página `/`, crie o arquivo
`pages/index.vue`.

### Execução 🚀

Para visualizar a aplicação Nuxt.js, você deve usar o comando
`npm run dev`. A configuração desse comando é feita no arquivo `package.json`,
observe o trecho a seguir:

```json
"scripts": {
  "dev": "nuxt dev"
}
```

## Componentes 🧩

Os componentes são uma maneira eficaz de organizar e reutilizar o código em uma
aplicação Vue.js. No Nuxt, os componentes são armazenados no diretório
`components` e podem ser usados em qualquer parte da aplicação. Entretanto, para
que os componentes tenham o mesmo nome que foram criados, é necessário adicionar
a opção `pathPrefix` como `false` no arquivo `nuxt.config.js`. Veja o exemplo a
seguir:

```json
components: [
    {
        path: '~/components',
        pathPrefix: false,
    },
],
```

Imagine que você queira criar um formulário de cadastro de livros. Você pode
criar um componente chamado `~/components/BookForm.vue` e usá-lo em várias
páginas da aplicação. Aqui está um exemplo de como você pode criar um componente
de formulário para cadastro de um livro:

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
````

Neste exemplo, o componente `BookForm.vue` contém campos de entrada para o
título, autor e ano de lançamento de um livro, juntamente com um botão para
salvar o livro. Quando o botão é clicado, o método `salvar` é chamado, que
emite um event (`this.$emit`) `bookSubmitted` com os dados do livro. Esse evento
pode ser capturado por um elemento pai para processar os dados do livro.

Uma vez criado, o componente pode ser usado em qualquer página da aplicação
Nuxt.js. Por exemplo, para usar o componente `BookForm.vue` em uma página
`pages/index.vue`, você pode fazer o seguinte:

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
````

Neste exemplo, o componente `BookForm.vue` é importado e exibido na página
`pages/index.vue`. Quando o formulário for preenchido e o
botão "Salvar" for acionado, o evento `bookSubmitted` é capturado e um método
`bookSubmitted` é chamado para processar os dados do livro.

### Bulma.io 🎨

Bulma é um _framework_ CSS que facilita a criação de interfaces de usuário
atraentes e responsivas. Ele fornece uma variedade de componentes e estilos
prontos para uso, permitindo que você crie rapidamente interfaces de usuário
profissionais e visualmente atraentes.

Para usar o Bulma em uma aplicação Nuxt.js, você pode adicionar o Bulma ao
projeto via npm. Por exemplo:

```bash
npm install bulma
```

Depois de instalar o Bulma, você pode importá-lo em um arquivo `.css`
no arquivo `nuxt.config.js`. Veja o exemplo a seguir:

```javascript
css: [
    'bulma/css/bulma.css',
],
```

Uma vez instalado, o Bulma estará disponível em toda a aplicação Nuxt.js,
permitindo que você use seus estilos e componentes em qualquer lugar.

### Font Awesome 🎨

Font Awesome é uma biblioteca com uma ampla variedade de ícones vetoriais
gratuitos que podem ser usados em aplicações Web. Os ícones do Font Awesome
são escaláveis e fáceis de usar, tornando-os uma escolha popular para adicionar
ícones a interfaces de usuário.

Para usar o Font Awesome em uma aplicação Nuxt.js, você pode adicionar o Font
Awesome ao projeto via npm. Por exemplo:

```bash
npm install @fortawesome/fontawesome-free
```

Logo, você pode importá-lo em um arquivo `.css` no arquivo `nuxt.config.js`
para usar os ícones do Font Awesome em toda a aplicação Nuxt.js. Veja o exemplo:

```javascript
css: [
    '@fortawesome/fontawesome-free/css/all.css',
],
```

Uma vez instalado, o Font Awesome estará disponível em toda a aplicação Nuxt.js,
permitindo que você use seus ícones em qualquer lugar.

Um exemplo completo de uma aplicação Nuxt.js com Bulma e Font Awesome pode ser
visto no repositório:

```bash
git clone -b dev https://github.com/rodrigoprestesmachado/cpw2
cd cpw2/exemplos/vue/nuxt/books
```

## Referências 📚

* [O que é Vue.js?](https://www.w3schools.com/whatis/whatis_vue.asp) - W3CSchool
<!-- .element: style="margin-bottom:40px; font-size: 25px; color:white; font-family: arial;" -->

* [Vue.js](https://vuejs.org) - The Progressive JavaScript Framework
<!-- .element: style="margin-bottom:40px; font-size: 25px; color:white; font-family: arial;" -->

<center>
<a href="https://rpmhub.dev" target="blanck"><img src="../imgs/logo.png" alt="Rodrigo Prestes Machado" width="3%" height="3%" border=0 style="border:0; text-decoration:none; outline:none"></a><br/>
<a rel="license" href="http://creativecommons.org/licenses/by/4.0/">CC BY 4.0 DEED</a>
