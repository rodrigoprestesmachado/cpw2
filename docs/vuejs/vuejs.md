---
layout: default
title: Vue
parent: Frameworks
nav_order: 21
---

{% raw %}

# Vue.js

<center>
    <iframe src="https://cpw2.rpmhub.dev/vuejs/slides/index.html#/"
        title="Vue.js" width="90%" height="500" style="border:none;">
    </iframe>
</center>

Esta página acompanha os slides acima, na mesma ordem. Cada seção indica o
slide correspondente, para você poder alternar entre a explicação detalhada e
o resumo visual.
{: .fs-3 }

## O que é Vue.js

> Slides 2, 3 e 4

Vue.js é um _framework_ JavaScript de código aberto para construir interfaces
de usuário interativas. Ele cuida da camada de visualização, a parte da
aplicação que o usuário vê e com a qual interage.
{: .fs-3 }

Uma característica importante do Vue é a **adoção incremental**. Você não
precisa reescrever o projeto inteiro para usá-lo: dá para começar controlando
apenas um pedaço de uma página que já existe e, aos poucos, ampliar o uso.
{: .fs-3 }

**Uma analogia:** se o HTML são as paredes de uma casa e o CSS é a pintura, o
JavaScript tradicional seria instalar e ligar à mão cada interruptor e cada
tomada. O Vue funciona como um sistema de automação residencial: você declara
o que deve acontecer ("quando escurecer, acenda a luz da sala") e ele mantém
tudo sincronizado sozinho.
{: .fs-3 }

Por que usar Vue?
{: .fs-3 }

* **Simplicidade:** você escreve um HTML quase normal, com alguns atributos
  especiais. A curva de aprendizado é suave.
* **Componentização:** a interface é dividida em peças reutilizáveis, como
  blocos de LEGO.
* **Ecossistema:** ferramentas oficiais como o
  [Vue Router](https://router.vuejs.org) (navegação entre páginas) e o
  [Pinia](https://pinia.vuejs.org) (gerenciamento de estado) resolvem
  necessidades comuns.
{: .fs-3 }

### Reatividade

A grande ideia do Vue é a **reatividade**: quando um dado muda, a tela se
atualiza sozinha. Pense em uma planilha eletrônica. Ao alterar o valor de uma
célula, todas as fórmulas que dependem dela são recalculadas automaticamente.
{: .fs-3 }

Sem Vue, cada mudança exige que você encontre o elemento e altere o conteúdo:
{: .fs-3 }

```javascript
document.getElementById("msg").innerText = "novo valor";
```
{: .fs-3 }

Com Vue, você só altera a variável. O Vue sabe quais partes da tela dependem
dela e as atualiza. O ciclo completo fica assim:
{: .fs-3 }

```mermaid
flowchart TD
    dados["data: dados reativos"] --> template[Template com diretivas]
    template --> tela[Tela atualizada]
    usuario[Evento do usuario] --> metodos[methods]
    metodos --> dados
```
{: .fs-3 }

Os dados ficam em `data()`. O template (o HTML) mostra esses dados. Quando o
usuário clica ou digita, um método altera os dados, e a tela acompanha.
{: .fs-3 }

## Diretivas

> Slide 5

Diretivas são atributos especiais que o Vue acrescenta ao HTML. Todas começam
com `v-` e dizem ao Vue como aquele elemento deve se comportar. As principais
são:
{: .fs-3 }

* `v-bind`: liga um atributo HTML a um dado.
* `v-model`: liga um campo de formulário a um dado nos dois sentidos.
* `v-if` e `v-else`: mostram ou removem um elemento conforme uma condição.
* `v-for`: repete um elemento para cada item de uma lista.
* `v-on`: executa um método quando acontece um evento, como um clique.
{: .fs-3 }

As próximas seções mostram cada uma delas em um exemplo pequeno e completo.
{: .fs-3 }

## Hello Vue

> Slides 6 e 7

O primeiro exemplo exibe a mensagem "Hello Vue in CPW2!" na tela:
{: .fs-3 }

```html
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Hello Vue</title>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.global.min.js">
    </script>
</head>
<body>
    <div id="app">
        <h1>{{ message }}</h1>
    </div>
    <script>
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
{: .fs-3 }

Vamos ler o exemplo por partes:
{: .fs-3 }

1. **Importação via CDN:** a tag `<script src="...vue.global.min.js">` carrega
   o Vue direto da internet. Nada precisa ser instalado, o que é ótimo para
   aprender e prototipar.
2. **O território do Vue:** a `<div id="app">` é a região que o Vue controla.
   Fora dela, a página continua sendo HTML comum.
3. **Interpolação `{{ message }}`:** as chaves duplas (os "bigodes", do inglês
   _mustache_) dizem ao Vue: "coloque aqui o valor de `message`". Se o valor
   mudar, o texto muda junto.
4. **`Vue.createApp({...})`:** cria a aplicação. A função `data()` devolve um
   objeto com os dados reativos. Ela é uma função, e não um objeto direto,
   para que cada componente receba a sua própria cópia dos dados.
5. **`app.mount('#app')`:** liga a aplicação à `div`. Antes dessa linha, o Vue
   existe na memória, mas ainda não controla nada na página.
{: .fs-3 }

## v-model: ligação de mão dupla

> Slides 8 e 9

A diretiva `v-model` conecta um campo de formulário a uma variável. A ligação
vale nos dois sentidos: o que o usuário digita vai para a variável, e o que o
código coloca na variável aparece no campo. É como um espelho.
{: .fs-3 }

```html
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
```
{: .fs-3 }

Ao digitar no `<input>`, o parágrafo acima muda letra por letra. Nenhum código
de evento foi escrito. Em JavaScript puro, seria preciso ouvir o evento
`input`, ler o valor do campo e escrever esse valor no parágrafo.
{: .fs-3 }

## v-for: listas

> Slides 10 e 11

A diretiva `v-for` cria um elemento para cada item de um array. É um laço de
repetição escrito direto no HTML.
{: .fs-3 }

```html
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
```
{: .fs-3 }

Leia `v-for="x in task"` como "para cada elemento `x` dentro do array
`task`". Três objetos no array geram três `<li>` na tela. Se um item for
acrescentado ou removido do array, a lista se atualiza sozinha.
{: .fs-3 }

## v-if e v-else: renderização condicional

> Slides 12 e 13

A diretiva `v-if` mostra um elemento apenas quando a condição é verdadeira. O
`v-else`, colocado logo depois, mostra a alternativa. É um `if/else` aplicado
ao HTML.
{: .fs-3 }

```html
<div id="app">
    <h1 v-if="show">Vue é incrível!</h1>
    <h1 v-else>Oh não 😢</h1>

    <template v-if="show">
        <p>Parágrafo 1</p>
        <p>Parágrafo 2</p>
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
```
{: .fs-3 }

Com `show` igual a `true`, aparece "Vue é incrível!". Com `false`, aparece
"Oh não". A tag `<template>` aplica a condição a um grupo de elementos sem
criar um elemento extra na página.
{: .fs-3 }

Um detalhe importante: `v-if` **remove** o elemento do DOM quando a condição é
falsa. Se a ideia for apenas esconder, mantendo o elemento no DOM, use
`v-show`. O `v-show` só troca o estilo `display` do elemento, o que é mais
barato quando algo aparece e some muitas vezes.
{: .fs-3 }

## v-on: eventos

> Slides 14 e 15

A diretiva `v-on` faz o Vue reagir a eventos do usuário: cliques, teclas,
movimentos do mouse. A forma `v-on:click` tem um atalho muito usado, `@click`.
{: .fs-3 }

```html
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
```
{: .fs-3 }

`v-on:click="execute"` significa "quando este botão for clicado, chame o
método `execute`". Os métodos ficam no objeto `methods`. O parâmetro `event` é
o evento nativo do navegador, e `event.target` é o elemento clicado (aqui, o
`BUTTON`).
{: .fs-3 }

Dentro de um método, `this` dá acesso aos dados de `data()`. É assim que um
evento altera o estado da aplicação:
{: .fs-3 }

```html
<div id="app">
    <p>Cliques: {{ total }}</p>
    <button @click="contar">Clique aqui</button>
</div>

<script>
    const app = Vue.createApp({
        data() {
            return { total: 0 }
        },
        methods: {
            contar() {
                this.total++
            }
        }
    })
    app.mount('#app')
</script>
```
{: .fs-3 }

## v-bind: atributos dinâmicos

> Slides 5 e 16

A interpolação `{{ }}` funciona apenas no conteúdo dos elementos, não dentro
de atributos. Para que um atributo receba um valor vindo dos dados, use
`v-bind`. O atalho é o sinal de dois pontos: `:src` é o mesmo que
`v-bind:src`.
{: .fs-3 }

```html
<div id="app">
    <img :src="foto" :alt="descricao" width="200">
    <button :disabled="bloqueado">Enviar</button>
</div>

<script>
    const app = Vue.createApp({
        data() {
            return {
                foto: 'https://vuejs.org/images/logo.png',
                descricao: 'Logo do Vue',
                bloqueado: true
            }
        }
    })
    app.mount('#app')
</script>
```
{: .fs-3 }

Sem os dois pontos, `src="foto"` seria o texto literal "foto". Com `:src`, o
Vue lê a variável `foto` e usa o seu valor. Trocar `bloqueado` para `false`
habilita o botão.
{: .fs-3 }

## Resumo das diretivas

> Slide 16

| Diretiva | Função | Atalho |
|----------|--------|--------|
| `v-bind` | Liga um atributo HTML a um dado | `:` |
| `v-model` | Ligação de mão dupla com campos de formulário | |
| `v-if` / `v-else` | Renderização condicional | |
| `v-for` | Repete um elemento para cada item de uma lista | |
| `v-on` | Reage a eventos do DOM | `@` |
{: .fs-3 }

## Ciclo de vida

> Slides 17 a 23

Todo componente Vue passa por fases, da criação até a remoção da página, assim
como um ser vivo nasce, cresce e morre. Em cada fase o Vue chama funções
especiais, os **ganchos** (_hooks_), onde você pode colocar código.
{: .fs-3 }

1. **Criação** (`beforeCreate`, `created`): o Vue prepara dados e métodos.
2. **Montagem** (`beforeMount`, `mounted`): o componente é inserido no DOM.
3. **Atualização** (`beforeUpdate`, `updated`): o DOM é atualizado depois que
   um dado muda.
4. **Desmontagem** (`beforeUnmount`, `unmounted`): o componente sai do DOM.
{: .fs-3 }

Os ganchos mais usados no dia a dia:
{: .fs-3 }

* `created`: os dados já existem, mas nada foi desenhado na tela. Bom lugar
  para começar a buscar dados de uma API.
* `mounted`: o componente já está visível. Bom lugar para acessar elementos do
  DOM, por exemplo para dar foco a um campo.
* `updated`: roda a cada atualização da tela. Cuidado: alterar dados aqui pode
  gerar um laço infinito de atualizações.
* `unmounted`: hora de limpar a casa, parando timers (`clearInterval`) e
  removendo ouvintes de eventos. Esquecer essa limpeza deixa código rodando
  para um componente que não existe mais.
{: .fs-3 }

Os ganchos são declarados como funções no mesmo objeto de `data()` e
`methods`:
{: .fs-3 }

```javascript
const app = Vue.createApp({
    data() {
        return { segundos: 0, timer: null }
    },
    mounted() {
        this.timer = setInterval(() => this.segundos++, 1000)
    },
    unmounted() {
        clearInterval(this.timer)
    }
})
app.mount('#app')
```
{: .fs-3 }

Quando a aplicação aparece na tela, `mounted` inicia um cronômetro. Se ela for
removida, `unmounted` para o cronômetro.
{: .fs-3 }

## Integração com Axios

> Slides 24 e 25

O [Axios](https://axios-http.com/docs/intro) é uma biblioteca para fazer
requisições HTTP. Ele funciona como um carteiro: leva o pedido ao servidor e
traz a resposta de volta. Assim como o `fetch`, cada chamada do Axios devolve
uma **Promise**, o mesmo conceito estudado na aula de
[Promise](https://cpw2.rpmhub.dev/promise/promise.html).
{: .fs-3 }

```html
<head>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.global.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
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
```
{: .fs-3 }

O fluxo, passo a passo:
{: .fs-3 }

1. O usuário clica em "Load data", e o `v-on:click` chama `getData`.
2. `axios.get("data.json")` faz a requisição e devolve uma Promise.
3. Quando a resposta chega, o `.then()` coloca os dados em `this.tasks`. O
   Axios já converte o JSON em objeto, disponível em `response.data`.
4. Como `tasks` é reativo, o `v-for` desenha a lista na tela.
{: .fs-3 }

O mesmo método pode ser escrito com `async`/`await`, que você já conhece:
{: .fs-3 }

```javascript
methods: {
    async getData() {
        try {
            let response = await axios.get("data.json")
            this.tasks = response.data
        } catch (erro) {
            console.error(erro)
        }
    }
}
```
{: .fs-3 }

Para o `axios.get` conseguir ler o `data.json`, abra a página por um servidor
local (por exemplo, a extensão Live Server do VS Code), e não pelo arquivo
direto no navegador.
{: .fs-3 }

## Próximos passos: Nuxt.js

> Slide 26

Quando a aplicação cresce, surgem necessidades comuns: várias páginas,
carregamento otimizado, HTML gerado no servidor para melhorar o SEO. O
**Nuxt.js** é um _framework_ construído sobre o Vue que já traz essas soluções
prontas. Se o Vue é o motor, o Nuxt é o carro completo, com chassi, freios e
direção já montados.
{: .fs-3 }

O Nuxt oferece:
{: .fs-3 }

* **Roteamento automático** baseado na estrutura de arquivos;
* **Renderização no servidor (SSR)** para melhor SEO e desempenho;
* **Geração de sites estáticos**;
* **Importação automática** de componentes;
* **Sistema de módulos** para acrescentar funcionalidades.
{: .fs-3 }

Para criar um projeto:
{: .fs-3 }

```bash
npx nuxi@latest init <nome-do-projeto>
```

O `npx` vem junto com o Node.js e executa um pacote sem instalá-lo de forma
global no computador.
{: .fs-3 }

### Roteamento

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

### Execução

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

### Componentes em arquivos .vue

Componentes dividem a interface em peças menores, independentes e
reutilizáveis. Em um projeto Nuxt, cada componente fica em um arquivo `.vue`
dentro do diretório `components`, reunindo `<template>`, `<script>` e
`<style>`. O Nuxt importa esses componentes automaticamente. Para manter o nome
original do arquivo, sem prefixo de pasta, configure o `nuxt.config.js`:
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

O componente `~/components/BookForm.vue` abaixo é um formulário de cadastro de
livros:
{: .fs-3 }

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
{: .fs-3 }

Repare que tudo o que você viu antes continua aqui: `data()`, `methods`,
`v-model` e `@click`. A novidade é o `this.$emit`, que dispara um **evento
personalizado** chamado `bookSubmitted` levando os dados do livro. Quem usa o
componente pode ouvir esse evento:
{: .fs-3 }

```html
<template>
  <BookForm @bookSubmitted="execute" />
</template>

<script>
export default {
  methods: {
    execute(data) {
      console.log(data);
    },
  },
};
</script>
```
{: .fs-3 }

Esse é o **fluxo de dados unidirecional** do Vue: dados descem do pai para o
filho (por propriedades) e eventos sobem do filho para o pai (por `$emit`). O
filho nunca altera diretamente os dados do pai, o que deixa a aplicação mais
previsível. As páginas [Componentes](https://cpw2.rpmhub.dev/vuejs/components.html)
e [Slots](https://cpw2.rpmhub.dev/vuejs/slots.html) aprofundam esse assunto.
{: .fs-3 }

### Bulma e Font Awesome

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

### Exemplo completo

```bash
git clone -b dev https://github.com/rodrigoprestesmachado/cpw2
cd cpw2/exemplos/vue/nuxt/books
npm install
npm run dev
```

## Exercícios de Fixação Práticos

Os exercícios abaixo são progressivos: cada um acrescenta uma peça ao
anterior. Use uma página HTML simples com o Vue carregado por CDN, como no
Hello Vue, e confira o resultado direto na tela. Se travar em algum, volte à
seção indicada entre parênteses.
{: .fs-3 }

1. **Minha primeira aplicação** (Hello Vue)

    Crie uma página com uma `<div id="app">` e uma aplicação Vue com um dado
    `nome` contendo o seu nome. Mostre na tela a frase `Olá, {{ nome }}!`
    dentro de um `<h1>`. Depois, troque o valor de `nome` no código e recarregue
    a página para ver a mudança.

2. **O espelho** (v-model)

    Acrescente um `<input>` ligado a `nome` com `v-model`. Ao digitar no campo,
    o `<h1>` do exercício anterior deve mudar a cada letra.

3. **Atributo dinâmico** (v-bind)

    Crie um dado `corDoTexto` com o valor `"blue"` e use
    `:style="{ color: corDoTexto }"` no `<h1>`. Acrescente um segundo `<input>`
    ligado a `corDoTexto` com `v-model` e teste digitar `red`, `green` ou
    `orange`.

4. **Mostrar e esconder** (v-if, v-else e v-on)

    Crie um dado `visivel` com valor `true` e um botão com
    `@click="visivel = !visivel"`. Quando `visivel` for verdadeiro, mostre um
    parágrafo com uma dica de estudo; quando for falso, mostre
    "Dica escondida". Depois troque `v-if` por `v-show` e observe, no
    inspetor do navegador, a diferença no DOM.

5. **Lista de frutas** (v-for)

    Crie um dado `frutas` com o array `["Maçã", "Banana", "Uva"]`. Use `v-for`
    para mostrar cada fruta em um `<li>` dentro de uma `<ul>`. Acrescente uma
    quarta fruta no array e confira que a lista cresce sem mexer no HTML.

6. **Contador** (v-on e methods)

    Crie um dado `total` começando em 0 e dois botões: "+1" e "Zerar". Cada
    botão chama um método diferente em `methods` (`somar` e `zerar`), que
    altera `this.total`. Mostre o total na tela.

7. **Lista de tarefas** (v-model, v-on, v-for e v-if juntos)

    Crie um `<input>` ligado a `novaTarefa` e um botão "Adicionar". Ao clicar,
    um método coloca o texto no array `tarefas` com `push` e limpa o campo. Mostre
    as tarefas com `v-for`. Quando o array estiver vazio, mostre com `v-if` a
    mensagem "Nenhuma tarefa cadastrada". Como desafio extra, ignore textos
    vazios e acrescente um botão "Remover" em cada `<li>` usando `splice`.

8. **Tarefas vindas de um JSON** (Axios)

    Crie um arquivo `tarefas.json` na mesma pasta da página, por exemplo
    `[{ "texto": "Estudar Vue" }, { "texto": "Fazer os exercícios" }]`. Carregue
    o Axios por CDN e crie um botão "Carregar" que chama um método com
    `axios.get("tarefas.json")`. No `.then()`, guarde `response.data` em
    `tarefas` e mostre a lista com `v-for`. Abra a página por um servidor
    local.

9. **Carregar sem clicar** (ciclo de vida e async/await)

    Reescreva o exercício 8 sem o botão: faça a requisição no gancho
    `mounted`, usando `async`/`await` e `try`/`catch`. Se a requisição falhar
    (teste trocando o nome do arquivo), mostre com `v-if` a mensagem
    "Não foi possível carregar as tarefas".

Depois de concluir estes exercícios, siga para os
[Exercícios de projeto sobre Vue.js](https://cpw2.rpmhub.dev/exercicios/vue.html),
que constroem um CRUD completo com componentes e uma API.
{: .fs-3 }

## Exercício de Fixação Teórico

<center>
    <iframe src="https://cpw2.rpmhub.dev/vuejs/slides/questions.html"
        title="Exercício de Fixação Teórico sobre Vue.js" width="90%" height="500"
        style="border:none;">
    </iframe>
</center>

## Referências

* [O que é Vue.js?](https://www.w3schools.com/whatis/whatis_vue.asp) no W3Schools

* [Vue.js](https://vuejs.org): The Progressive JavaScript Framework

* [Axios](https://axios-http.com/docs/intro): Promise based HTTP client

* [Nuxt.js](https://nuxt.com): The Intuitive Vue Framework

* [Bulma](https://bulma.io): Modern CSS framework based on Flexbox

{% endraw %}

<center>
<a href="https://rpmhub.dev" target="blanck"><img src="../imgs/logo.png" alt="Rodrigo Prestes Machado" width="3%" height="3%" border=0 style="border:0; text-decoration:none; outline:none"></a><br/>
<a rel="license" href="http://creativecommons.org/licenses/by/4.0/">CC BY 4.0 DEED</a>
</center>
