<!-- .slide:  data-background-opacity="0.3" data-background-image="imgs/title.jpg" data-transition="convex"  -->
# Introdução ao Vue.js
<!-- .element: style="margin-bottom:100px; font-size: 50px; color:white; font-family: Marker Felt;" -->

Pressione 'F' para tela cheia
<!-- .element: style="font-size: small; color:white;" -->

[versão em pdf](?print-pdf)
<!-- .element: style="font-size: small;" -->


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
# O que é Vue.js?
<!-- .element: style="margin-bottom:50px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

* Vue.js é um framework JavaScript de código aberto usado para construir interfaces de usuário interativas e dinâmicas.
<!-- .element: style="margin-bottom:50px; font-size: 23px; font-family: arial; color:#F5F5F5" -->

* Foca na camada de visualização (a parte que o usuário vê) e pode ser adotado de forma incremental: comece pequeno em um projeto existente e cresça aos poucos.
<!-- .element: style="margin-bottom:50px; font-size: 23px; font-family: arial; color:#F5F5F5" -->

* Analogia: se HTML são as paredes e CSS é a pintura, o Vue.js é a automação que mantém tudo sincronizado quando os dados mudam.
<!-- .element: style="margin-bottom:50px; font-size: 23px; font-family: arial; color:#F5F5F5" -->


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
## Por que usar Vue.js?
<!-- .element: style="margin-bottom:50px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

* **Simplicidade:** curva de aprendizado suave e sintaxe concisa — você escreve HTML quase normal, com alguns "superpoderes".
<!-- .element: style="margin-bottom:80px; font-size: 23px; font-family: arial; color:#F5F5F5" -->

* **Componentização:** divida a interface em peças reutilizáveis (como LEGOs) que se encaixam para formar a aplicação.
<!-- .element: style="margin-bottom:80px; font-size: 23px; font-family: arial; color:#F5F5F5" -->

* **Ecossistema rico:** ferramentas oficiais como [Vue Router](https://router.vuejs.org) (navegação entre páginas) e [Pinia](https://pinia.vuejs.org) (gerenciamento de estado) cobrem necessidades comuns sem reinventar a roda.
<!-- .element: style="margin-bottom:50px; font-size: 23px; font-family: arial; color:#F5F5F5" -->


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
# Reatividade ⚡
<!-- .element: style="margin-bottom:50px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

* A grande "mágica" do Vue: quando os dados mudam, a tela atualiza sozinha.
<!-- .element: style="margin-bottom:50px; font-size: 23px; font-family: arial; color:#F5F5F5" -->

* Sem Vue: `document.getElementById('msg').innerText = 'novo valor'` para cada mudança.
<!-- .element: style="margin-bottom:50px; font-size: 23px; font-family: arial; color:#F5F5F5" -->

* Com Vue: você muda o valor da variável e o Vue cuida do resto. Pense em uma planilha do Excel: ao alterar uma célula, todas as fórmulas dependentes se atualizam automaticamente.
<!-- .element: style="margin-bottom:50px; font-size: 23px; font-family: arial; color:#F5F5F5" -->


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
# Diretivas 🤓
<!-- .element: style="margin-bottom:50px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

* [Vue.js](https://vuejs.org) permite estender o HTML com atributos especiais chamados **diretivas**.
<!-- .element: style="margin-bottom:40px; font-size: 23px; font-family: arial; color:#F5F5F5" -->

* Diretivas são "anotações mágicas" no HTML que dizem ao Vue como aquele elemento deve se comportar. Todas começam com `v-`.
<!-- .element: style="margin-bottom:40px; font-size: 23px; font-family: arial; color:#F5F5F5" -->

* Principais diretivas: `v-bind`, `v-model`, `v-if`/`v-else`, `v-for`, `v-on` (ou simplesmente `@`).
<!-- .element: style="margin-bottom:40px; font-size: 23px; font-family: arial; color:#F5F5F5" -->


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
# Hello Vue 🌍
<!-- .element: style="margin-bottom:30px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

```html
<html lang="en">
<head>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.global.min.js"></script>
    <title>Hello Vue</title>
</head>
<body>
    <div id="app">
        <h1>{{ message }}</h1>
    </div>
    <script>
        const app = Vue.createApp({
            data() {
                return { message: 'Hello Vue in CPW2!' }
            }
        })
        app.mount('#app')
    </script>
</body>
</html>
```
<!-- .element: style="margin-bottom:30px; font-size: 18px; font-family: Courier New; background-color: white" -->


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
# Hello Vue: anatomia 🔬
<!-- .element: style="margin-bottom:30px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

* `<script src="...vue.global.min.js">` carrega o Vue via CDN — nenhuma instalação necessária.
<!-- .element: style="margin-bottom:30px; font-size: 20px; font-family: arial; color:#F5F5F5" -->

* `<div id="app">` é o "território" onde o Vue atua. Fora dele, é HTML comum.
<!-- .element: style="margin-bottom:30px; font-size: 20px; font-family: arial; color:#F5F5F5" -->

* `{{ message }}` é a **interpolação** (chamada de "bigode"): substitui pelo valor da variável.
<!-- .element: style="margin-bottom:30px; font-size: 20px; font-family: arial; color:#F5F5F5" -->

* `Vue.createApp({...})` cria a aplicação; `app.mount('#app')` a "pluga" na `div`.
<!-- .element: style="margin-bottom:30px; font-size: 20px; font-family: arial; color:#F5F5F5" -->


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
# Two-Way Binding 🔄
<!-- .element: style="margin-bottom:30px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

* A diretiva `v-model` cria uma ligação de **mão dupla** entre um campo de formulário e uma variável.
<!-- .element: style="margin-bottom:20px; font-size: 22px; font-family: arial; color:#F5F5F5" -->

* É como um espelho: o que muda no campo, muda na variável — e vice-versa.
<!-- .element: style="margin-bottom:20px; font-size: 22px; font-family: arial; color:#F5F5F5" -->

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.global.min.js"></script>
    <title>Two Way Binding</title>
</head>
<body>
    <h2>Vue.js</h2>

    <div id="app">
        <p>{{ message }}</p>
        <p><input v-model="message"></p>
    </div>

    <script>
        const app = Vue.createApp({
            data() {
                return { message: 'Hello Vue.js in CPW2!' }
            }
        })
        app.mount('#app')
    </script>
</body>
</html>
```
<!-- .element: style="margin-bottom:30px; font-size: 16px; font-family: Courier New; background-color: white" -->


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
# Two-Way Binding: o efeito 👀
<!-- .element: style="margin-bottom:50px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

* Ao digitar no `<input>`, o `<p>` acima atualiza em tempo real.
<!-- .element: style="margin-bottom:50px; font-size: 23px; font-family: arial; color:#F5F5F5" -->

* Nenhum código de eventos foi escrito — o Vue cuida disso automaticamente.
<!-- .element: style="margin-bottom:50px; font-size: 23px; font-family: arial; color:#F5F5F5" -->

* Compare com JavaScript puro: seria preciso ouvir o evento `input`, capturar o valor, atualizar o `<p>`... várias linhas para o mesmo resultado.
<!-- .element: style="margin-bottom:50px; font-size: 23px; font-family: arial; color:#F5F5F5" -->


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
# v-for: listas 📋
<!-- .element: style="margin-bottom:30px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

* A diretiva `v-for` renderiza um elemento HTML **para cada item** de um array.
<!-- .element: style="margin-bottom:20px; font-size: 22px; font-family: arial; color:#F5F5F5" -->

* É a forma declarativa de fazer um "loop" no HTML, sem precisar manipular o DOM manualmente.
<!-- .element: style="margin-bottom:20px; font-size: 22px; font-family: arial; color:#F5F5F5" -->

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.global.min.js"></script>
    <title>v-for</title>
</head>
<body>
    <h2>Vue.js in CPW2</h2>

    <div id="app">
        <ul>
            <li v-for="x in task">
                {{ x.text }}
            </li>
        </ul>
    </div>

    <script>
        const app = Vue.createApp({
            data() {
                return {
                    task: [
                        { text: 'Learn JavaScript' },
                        { text: 'Learn Vue.js' },
                        { text: 'Build Something Awesome' }
                    ]
                }
            }
        })
        app.mount('#app')
    </script>
</body>
</html>
```
<!-- .element: style="margin-bottom:30px; font-size: 14px; font-family: Courier New; background-color: white" -->


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
# v-for: como ler 🧐
<!-- .element: style="margin-bottom:50px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

* `v-for="x in task"` significa: "para cada elemento `x` dentro do array `task`...".
<!-- .element: style="margin-bottom:40px; font-size: 22px; font-family: arial; color:#F5F5F5" -->

* O Vue cria um `<li>` para cada item — três itens no array geram três `<li>` na tela.
<!-- .element: style="margin-bottom:40px; font-size: 22px; font-family: arial; color:#F5F5F5" -->

* Se o array mudar (adicionar/remover itens), a lista na tela se atualiza sozinha. Reatividade em ação! ⚡
<!-- .element: style="margin-bottom:40px; font-size: 22px; font-family: arial; color:#F5F5F5" -->


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
# v-if: renderização condicional 🔀
<!-- .element: style="margin-bottom:30px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

* `v-if` exibe ou oculta elementos conforme uma condição — é um `if/else` aplicado ao HTML.
<!-- .element: style="margin-bottom:20px; font-size: 22px; font-family: arial; color:#F5F5F5" -->

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.global.min.js"></script>
    <title>v-if</title>
</head>
<body>
    <div id="app">

        <h1 v-if="show">Vue é incrível!</h1>
        <h1 v-else>Oh não 😢</h1>

        <!-- Com template -->
        <template v-if="show">
            <p>Parágrafo 1</p>
        </template>

    </div>

    <script>
        const app = Vue.createApp({
            data() {
                return { show: true }
            }
        })
        app.mount('#app')
    </script>
</body>
</html>
```
<!-- .element: style="margin-bottom:30px; font-size: 16px; font-family: Courier New; background-color: white" -->


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
# v-if: detalhes importantes 💡
<!-- .element: style="margin-bottom:40px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

* Quando `show` é `true`, o `<h1>Vue é incrível!</h1>` aparece; quando é `false`, aparece o `<h1>Oh não 😢</h1>`.
<!-- .element: style="margin-bottom:30px; font-size: 22px; font-family: arial; color:#F5F5F5" -->

* `<template v-if="...">` é um truque útil: aplica a condição a um **grupo** de elementos sem criar um elemento extra na página.
<!-- .element: style="margin-bottom:30px; font-size: 22px; font-family: arial; color:#F5F5F5" -->

* Atenção: `v-if` **remove** o elemento do DOM. Se você só quer esconder (mantendo no DOM), use `v-show`.
<!-- .element: style="margin-bottom:30px; font-size: 22px; font-family: arial; color:#F5F5F5" -->


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
# v-on: eventos 🖱️
<!-- .element: style="margin-bottom:30px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

* `v-on` faz o Vue **reagir** a eventos do usuário (cliques, teclas, mouse, etc.).
<!-- .element: style="margin-bottom:20px; font-size: 22px; font-family: arial; color:#F5F5F5" -->

* Existe um atalho muito usado: `@click` é o mesmo que `v-on:click`.
<!-- .element: style="margin-bottom:20px; font-size: 22px; font-family: arial; color:#F5F5F5" -->

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.global.min.js"></script>
    <title>v-on</title>
</head>
<body>

    <div id="app">
        <button v-on:click="execute">Try</button>
    </div>

    <script>
        const app = Vue.createApp({
            data() {
                return {}
            },
            methods: {
                execute(event) {
                    alert(event.target.tagName)
                }
            }
        })
        app.mount('#app')
    </script>
</body>
</html>
```
<!-- .element: style="margin-bottom:30px; font-size: 16px; font-family: Courier New; background-color: white" -->


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
# v-on: anatomia do exemplo 🔬
<!-- .element: style="margin-bottom:40px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

* `v-on:click="execute"` diz: "quando este botão for clicado, chame o método `execute`".
<!-- .element: style="margin-bottom:30px; font-size: 22px; font-family: arial; color:#F5F5F5" -->

* Os métodos ficam dentro do objeto `methods`, que agrupa todas as funções do componente.
<!-- .element: style="margin-bottom:30px; font-size: 22px; font-family: arial; color:#F5F5F5" -->

* O parâmetro `event` é o evento do DOM (objeto nativo do navegador); `event.target` é o elemento clicado.
<!-- .element: style="margin-bottom:30px; font-size: 22px; font-family: arial; color:#F5F5F5" -->


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
# Resumo das diretivas 📌
<!-- .element: style="margin-bottom:30px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

| Diretiva | Função | Atalho |
|----------|--------|--------|
| `v-bind` | Liga atributo HTML a um dado | `:` |
| `v-model` | Ligação de mão dupla com formulários | — |
| `v-if` / `v-else` | Renderização condicional | — |
| `v-for` | Repete elemento para cada item de uma lista | — |
| `v-on` | Reage a eventos do DOM | `@` |
<!-- .element: style="margin-bottom:30px; font-size: 22px; font-family: arial; color:#F5F5F5" -->


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
# Ciclo de Vida no Vue.js ♻️
<!-- .element: style="margin-bottom:30px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

* Todo componente Vue passa por **fases** desde sua criação até sua destruição — assim como um ser vivo nasce, cresce e morre.
<!-- .element: style="margin-bottom:20px; font-size: 20px; font-family: arial; color:#F5F5F5" -->

* O Vue oferece "ganchos" (hooks) que executam código em momentos específicos dessas fases. Útil para: buscar dados, configurar timers, limpar recursos.
<!-- .element: style="margin-bottom:20px; font-size: 20px; font-family: arial; color:#F5F5F5" -->

<img src="https://miro.medium.com/v2/resize:fit:640/format:webp/1*lBnwGh3SmgTgUq0AqJ7QJQ.png" alt="Ciclo de Vida" width="30%" height="30%" border=0 style="border:0; text-decoration:none; outline:none">

<img src="https://miro.medium.com/v2/resize:fit:640/format:webp/1*LdrOYrIQrfzgbgqaSTA2WA.png" alt="Ciclo de Vida" width="30%" height="30%" border=0 style="border:0; text-decoration:none; outline:none">


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
# Ciclo de Vida: as 4 fases 🎬
<!-- .element: style="margin-bottom:40px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

1. **Criação** — Vue prepara os dados e métodos (`beforeCreate`, `created`).
<!-- .element: style="margin-bottom:25px; font-size: 22px; font-family: arial; color:#F5F5F5" -->

2. **Montagem** — Vue insere o componente no DOM (`beforeMount`, `mounted`).
<!-- .element: style="margin-bottom:25px; font-size: 22px; font-family: arial; color:#F5F5F5" -->

3. **Atualização** — Vue atualiza o DOM quando dados mudam (`beforeUpdate`, `updated`).
<!-- .element: style="margin-bottom:25px; font-size: 22px; font-family: arial; color:#F5F5F5" -->

4. **Destruição** — Vue remove o componente do DOM (`beforeUnmount`, `unmounted`).
<!-- .element: style="margin-bottom:25px; font-size: 22px; font-family: arial; color:#F5F5F5" -->


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
# Ciclo de Vida: beforeCreate
<!-- .element: style="margin-bottom:50px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

* Chamado **antes** de o Vue inicializar a instância.
<!-- .element: style="margin-bottom:40px; font-size: 23px; font-family: arial; color:#F5F5F5" -->

* Os dados (`data`) e métodos ainda **não estão disponíveis** — tentar acessá-los retorna `undefined`.
<!-- .element: style="margin-bottom:40px; font-size: 23px; font-family: arial; color:#F5F5F5" -->

* Pouco usado na prática. Útil apenas para configurações muito iniciais (logs, analytics).
<!-- .element: style="margin-bottom:40px; font-size: 23px; font-family: arial; color:#F5F5F5" -->


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
# Ciclo de Vida: created
<!-- .element: style="margin-bottom:50px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

* Chamado logo após a instância ser criada.
<!-- .element: style="margin-bottom:30px; font-size: 23px; font-family: arial; color:#F5F5F5" -->

* Os dados e métodos **já estão disponíveis**, mas o componente **ainda não foi inserido no DOM**.
<!-- .element: style="margin-bottom:30px; font-size: 23px; font-family: arial; color:#F5F5F5" -->

* **Caso de uso típico:** buscar dados de uma API antes da renderização (assim a tela já aparece com os dados).
<!-- .element: style="margin-bottom:30px; font-size: 23px; font-family: arial; color:#F5F5F5" -->


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
# Ciclo de Vida: mounted
<!-- .element: style="margin-bottom:50px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

* Chamado quando o componente está **visível** no DOM.
<!-- .element: style="margin-bottom:30px; font-size: 23px; font-family: arial; color:#F5F5F5" -->

* É seguro acessar elementos do DOM via `this.$refs` ou `document.querySelector`.
<!-- .element: style="margin-bottom:30px; font-size: 23px; font-family: arial; color:#F5F5F5" -->

* **Casos de uso típicos:** inicializar bibliotecas que manipulam o DOM (gráficos, mapas, players de vídeo), focar um campo de formulário.
<!-- .element: style="margin-bottom:30px; font-size: 23px; font-family: arial; color:#F5F5F5" -->


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
# Ciclo de Vida: updated
<!-- .element: style="margin-bottom:50px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

* Chamado **toda vez** que um dado reativo muda e o DOM é atualizado.
<!-- .element: style="margin-bottom:30px; font-size: 23px; font-family: arial; color:#F5F5F5" -->

* **Cuidado:** alterar dados aqui pode causar um loop infinito de atualizações! Use com moderação.
<!-- .element: style="margin-bottom:30px; font-size: 23px; font-family: arial; color:#F5F5F5" -->

* **Caso de uso:** sincronizar com elementos externos (por exemplo, redesenhar um gráfico quando os dados mudam).
<!-- .element: style="margin-bottom:30px; font-size: 23px; font-family: arial; color:#F5F5F5" -->


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
# Ciclo de Vida: unmounted
<!-- .element: style="margin-bottom:50px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

* Chamado quando o componente é **removido** do DOM.
<!-- .element: style="margin-bottom:30px; font-size: 23px; font-family: arial; color:#F5F5F5" -->

* É o momento de **limpar a casa**: remover timers (`clearInterval`), cancelar requisições, desconectar listeners de eventos.
<!-- .element: style="margin-bottom:30px; font-size: 23px; font-family: arial; color:#F5F5F5" -->

* Esquecer essa limpeza causa **vazamentos de memória** — o navegador continua executando código de componentes que não existem mais.
<!-- .element: style="margin-bottom:30px; font-size: 23px; font-family: arial; color:#F5F5F5" -->


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
# Integração com Axios 🌐
<!-- .element: style="margin-bottom:30px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

* **Axios** é uma biblioteca para fazer requisições HTTP (buscar dados de APIs).
<!-- .element: style="margin-bottom:20px; font-size: 22px; font-family: arial; color:#F5F5F5" -->

* Funciona como um "carteiro": entrega o pedido ao servidor e traz a resposta de volta.
<!-- .element: style="margin-bottom:20px; font-size: 22px; font-family: arial; color:#F5F5F5" -->

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.global.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <title>Axios</title>
</head>
<body>
    <div id="app">
        <button v-on:click="getData">Load data</button>
        <ul>
            <li v-for="x in tasks">
                {{ x.text }}
            </li>
        </ul>
    </div>

    <script>
        const app = Vue.createApp({
            data() {
                return { tasks: [] }
            },
            methods: {
                getData() {
                    axios.get("data.json")
                        .then(response => (this.tasks = response.data))
                }
            }
        })
        app.mount('#app')
    </script>
</body>
</html>
```
<!-- .element: style="margin-bottom:30px; font-size: 14px; font-family: Courier New; background-color: white" -->


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
# Axios: o fluxo passo a passo 🔍
<!-- .element: style="margin-bottom:30px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

1. Usuário clica em **"Load data"** → dispara o método `getData`.
<!-- .element: style="margin-bottom:25px; font-size: 21px; font-family: arial; color:#F5F5F5" -->

2. `axios.get("data.json")` faz a requisição HTTP — retorna uma **Promise** (uma promessa de resposta futura).
<!-- .element: style="margin-bottom:25px; font-size: 21px; font-family: arial; color:#F5F5F5" -->

3. `.then(response => ...)` é executado **quando a resposta chega**, e atribui os dados a `this.tasks`.
<!-- .element: style="margin-bottom:25px; font-size: 21px; font-family: arial; color:#F5F5F5" -->

4. Como `tasks` é reativo, a lista `<ul>` é atualizada automaticamente. Reatividade + dados externos = aplicação completa! 🎉
<!-- .element: style="margin-bottom:25px; font-size: 21px; font-family: arial; color:#F5F5F5" -->


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
# Próximos passos 🚀
<!-- .element: style="margin-bottom:40px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

* **Nuxt.js**: framework construído sobre o Vue com roteamento automático, SSR e muito mais.
<!-- .element: style="margin-bottom:30px; font-size: 22px; font-family: arial; color:#F5F5F5" -->

* **Componentes em arquivos `.vue`**: cada componente em seu próprio arquivo, com `<template>`, `<script>` e `<style>` juntos.
<!-- .element: style="margin-bottom:30px; font-size: 22px; font-family: arial; color:#F5F5F5" -->

* **Composition API**: forma moderna de organizar a lógica dos componentes (alternativa ao `data`/`methods`/`computed`).
<!-- .element: style="margin-bottom:30px; font-size: 22px; font-family: arial; color:#F5F5F5" -->


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
# Questões 📚
<!-- .element: style="margin-bottom:50px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

<center>
<iframe src="https://cpw2.rpmhub.dev/vuejs/slides/questions.html" title="Vue.js" width="90%" height="500" style="border:none;"></iframe>
</center>


<!-- .slide:  data-background-opacity="0.1" data-background-image="https://miro.medium.com/max/1800/1*6ahbWjp_g9hqhaTDSJOL1Q.png" data-transition="convex"  -->
# Referências 📚
<!-- .element: style="margin-bottom:50px; font-size: 50px; color:2B2625; font-family: Marker Felt;" -->

* [O que é Vue.js?](https://www.w3schools.com/whatis/whatis_vue.asp) - W3CSchool
<!-- .element: style="margin-bottom:40px; font-size: 25px; color:white; font-family: arial;" -->

* [Vue.js](https://vuejs.org) - The Progressive JavaScript Framework
<!-- .element: style="margin-bottom:40px; font-size: 25px; color:white; font-family: arial;" -->

* [Axios](https://axios-http.com/docs/intro) - Promise based HTTP client for the browser and node.js
<!-- .element: style="margin-bottom:40px; font-size: 25px; color:white; font-family: arial;" -->

* [Nuxt.js](https://nuxt.com) - The Intuitive Vue Framework
<!-- .element: style="margin-bottom:40px; font-size: 25px; color:white; font-family: arial;" -->

<center>
<a href="https://rpmhub.dev" target="blanck"><img src="../../imgs/logo.png" alt="Rodrigo Prestes Machado" width="3%" height="3%" border=0 style="border:0; text-decoration:none; outline:none"></a><br/>
<a rel="license" href="http://creativecommons.org/licenses/by/4.0/">CC BY 4.0 DEED</a>
<!-- .element: style="margin-bottom:40px; font-size: 14px; color:white; font-family: arial;" -->
