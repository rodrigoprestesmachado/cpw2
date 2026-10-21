---
layout: default
title: Nuxt
parent: Frameworks
nav_order: 24
---

{% raw %}

# Nuxt.js

Quando a aplicação cresce, surgem necessidades comuns: várias páginas,
carregamento otimizado, HTML gerado no servidor para melhorar o SEO. O
**Nuxt.js** é um _framework_ construído sobre o Vue que já traz essas soluções
prontas. Se o Vue é o motor, o Nuxt é o carro completo, com chassi, freios e
direção já montados.
{: .fs-3 }

Esta aula continua a de [Vue.js](https://cpw2.rpmhub.dev/vuejs/vuejs.html). Os
componentes em arquivos `.vue` estão em
[Componentes](https://cpw2.rpmhub.dev/vuejs/components.html).
{: .fs-3 }

## O que o Nuxt oferece

* **Roteamento automático** baseado na estrutura de arquivos;
* **Renderização no servidor (SSR)** para melhor SEO e desempenho;
* **Geração de sites estáticos**;
* **Importação automática** de componentes;
* **Sistema de módulos** para acrescentar funcionalidades.
{: .fs-3 }

## Criar um projeto

```bash
npx nuxi@latest init <nome-do-projeto>
```

O `npx` vem junto com o Node.js e executa um pacote sem instalá-lo de forma
global no computador.
{: .fs-3 }

## Roteamento

No Nuxt, cada arquivo `.vue` dentro do diretório `pages` vira uma rota:
{: .fs-3 }

| Arquivo | URL gerada |
|---------|------------|
| `pages/index.vue` | `/` |
| `pages/sobre.vue` | `/sobre` |
| `pages/livros/index.vue` | `/livros` |
| `pages/livros/cadastro.vue` | `/livros/cadastro` |
{: .fs-3 }

O arquivo `app.vue` é o esqueleto da aplicação e precisa conter o componente
`<NuxtPage />`. Pense nele como o palco de um teatro: o palco fica fixo e o
ator (a página atual) muda conforme a URL.
{: .fs-3 }

```html
<template>
  <NuxtPage />
</template>
```

## Execução

```bash
npm run dev
```

Esse comando sobe um servidor local, normalmente em `http://localhost:3000`,
com recarga automática: cada alteração no código aparece no navegador sem
atualizar a página. O atalho está na seção `scripts` do `package.json`:
{: .fs-3 }

```json
"scripts": {
  "dev": "nuxt dev"
}
```

Outros comandos comuns são `npm run build` (gera a versão de produção) e
`npm run preview` (visualiza essa versão localmente).
{: .fs-3 }

## Componentes no Nuxt

O Nuxt importa automaticamente os arquivos `.vue` do diretório `components`.
Para manter o nome original do arquivo, sem prefixo de pasta, configure o
`nuxt.config.js`:
{: .fs-3 }

```javascript
components: [
    {
        path: '~/components',
        pathPrefix: false,
    },
],
```
{: .fs-3 }

Como escrever esses arquivos — `<template>`, `<script>`, `$emit` e o fluxo de
dados — está na aula de
[Componentes](https://cpw2.rpmhub.dev/vuejs/components.html). Os
[Slots](https://cpw2.rpmhub.dev/vuejs/slots.html) aprofundam a composição da
interface.
{: .fs-3 }

## Bulma e Font Awesome

O [Bulma](https://bulma.io) é um _framework_ CSS leve, baseado em Flexbox, que
oferece classes prontas. O Font Awesome oferece milhares de ícones vetoriais.
Para usá-los no Nuxt:
{: .fs-3 }

```bash
npm install bulma @fortawesome/fontawesome-free
```

```javascript
css: [
    'bulma/css/bulma.css',
    '@fortawesome/fontawesome-free/css/all.css',
],
```
{: .fs-3 }

A partir daí, `<button class="button is-primary">Salvar</button>` gera um
botão estilizado, e `<i class="fas fa-book"></i>` exibe um ícone de livro. A
lista completa de ícones está em
[fontawesome.com/icons](https://fontawesome.com/icons).
{: .fs-3 }

## Exemplo completo

```bash
git clone -b dev https://github.com/rodrigoprestesmachado/cpw2
cd cpw2/exemplos/vue/nuxt/books
npm install
npm run dev
```

## Referências

* [Nuxt.js](https://nuxt.com): The Intuitive Vue Framework

* [Vue.js](https://vuejs.org): The Progressive JavaScript Framework

* [Bulma](https://bulma.io): Modern CSS framework based on Flexbox

{% endraw %}

<center>
<a href="https://rpmhub.dev" target="blanck"><img src="../imgs/logo.png" alt="Rodrigo Prestes Machado" width="3%" height="3%" border=0 style="border:0; text-decoration:none; outline:none"></a><br/>
<a rel="license" href="http://creativecommons.org/licenses/by/4.0/">CC BY 4.0 DEED</a>
</center>
