---
layout: default
title: Slots
parent: Vue.js
nav_order: 23
---

# Slots

Slots é uma funcionalidade no Vue.js que permite criar componentes ainda mais
flexíveis. Eles funcionam como "espaços reservados" nos componentes onde você
pode inserir conteúdo dinâmico.

## 🔍 Tipos de Slots

Existem três tipos principais de slots no Vue.js:

1. **Slot Padrão**: O slot padrão é o mais simples e permite que você insira
conteúdo em um componente.
2. **Slots Nomeados**: Permitem que você defina múltiplos slots em um
componente, cada um com um nome específico.
3. **Slots com Escopo**: Permitem que um componente filho passe dados para o
componente pai através do slot.

### Slot Padrão (Default)

O slot padrão é a forma mais simples de usar slots. Todo conteúdo passado para
o componente será renderizado no local do `<slot>`.

Imagine que temos um componente chamado `CardComponent`, que representa um cartão
básico. Podemos definir um slot padrão dentro do componente para permitir que
o usuário insira qualquer conteúdo que desejar dentro do cartão. No exemplo, as
tags `<h3>` e `<p>` são passadas como conteúdo do slot padrão.

```html
<card-component>
  <h3 class="title is-4">Conteúdo no Slot Padrão</h3>
  <p>Este conteúdo está sendo passado através do slot padrão.</p>
</card-component>
```

Observe que o conteúdo dentro do componente `CardComponent` será renderizado
no local onde o `<slot>` está definido. Veja o exemplo abaixo:

```javascript
// Definição do componente
const CardComponent = {
  template: `
    <div class="card mb-4">
      <div class="card-content">
        <slot></slot> <!-- Conteúdo será inserido aqui -->
      </div>
    </div>
  `
};
```

### Slots Nomeados (Named)

Os slots nomeados permitem definir múltiplos pontos de inserção de conteúdo em
um componente, cada um com um nome específico.

No exemplo abaixo, o componente `CardComponent` possui três slots nomeados: `header`,
`default` (padrão) e `footer`. O conteúdo passado para cada slot será renderizado
no local correspondente dentro do componente. Caso algum slot não receba conteúdo,
ele será ignorado.

```html
<!-- Uso do componente -->
<card-component>
  <template #header>
    <h2 class="title is-3">Título no Header</h2>
  </template>

  <template #default>
    <p>Este é o conteúdo principal do card.</p>
    <button class="button is-primary" @click="showMessage">Clique aqui</button>
  </template>

  <template #footer>
    <p class="has-text-grey">Footer personalizado</p>
  </template>
</card-component>
````

Observe que para ignorar um slot, basta não passar nenhum conteúdo para ele, se
faz necessário incluir a diretiva `v-if` para evitar que o elemento seja
renderizado como vazio. Observe o exemplo abaixo para o slot `header` e `footer`.

```javascript
// Definição do componente
const CardComponent = {
  template: `
    <div class="card mb-4">
      <header class="card-header" v-if="$slots.header">
        <div class="card-header-title">
          <slot name="header"></slot>
        </div>
      </header>
      <div class="card-content">
        <slot></slot> <!-- Slot padrão -->
      </div>
      <footer class="card-footer" v-if="$slots.footer">
        <div class="card-footer-item">
          <slot name="footer"></slot>
        </div>
      </footer>
    </div>
  `
};
```

### Slots com Escopo (Scoped)

Os slots com escopo permitem que o componente filho passe dados para o
componente pai através do slot.

```html
<user-card v-for="user in users" :key="user.id" :user="user">
  <template #default="{ user, isOnline }">
    <div class="media">
      <div class="media-left">
        <figure class="image is-64x64">
          <img class="is-rounded" :src="user.avatar" :alt="user.name">
        </figure>
      </div>
      <div class="media-content">
        <p class="title is-5">{{ user.name }}</p>
        <p class="subtitle is-6">{{ user.email }}</p>
        <span class="tag" :class="isOnline ? 'is-success' : 'is-danger'">
          {{ isOnline ? 'Online' : 'Offline' }}
        </span>
      </div>
    </div>
  </template>
</user-card>
```

No exemplo acima, existe uma interpolação de dados `user` e `isOnline`. O `user` é
passado como uma prop para o componente `UserCard`, enquanto `isOnline` é uma
propriedade computada dentro do componente `UserCard` que simula o status
online/offline do usuário. O exemplo mostra que os dados podem ser passados do
componente pai para o filho e vice-versa.

```javascript
export default {
  name: "UserComponent",
  props: {
    user: {
      type: String,
      required: true,
    },
  },
  template: `
    <div class="card mb-4">
        <div class="card-content">
            <slot :user="user" :isOnline="isUserOnline"></slot>
        </div>
    </div>
  `,
  computed: {
    isUserOnline() {
      return Math.random() > 0.5; // Simula status online/offline
    },
  },
};
```

## 💡 Vantagens dos Slots

* Flexibilidade: Permite personalizar componentes sem modificar sua estrutura
* Reutilização: Um componente pode ser usado em diferentes contextos
* Separação de Responsabilidades: O componente cuida da estrutura, o pai do conteúdo
* Composição: Facilita a criação de layouts complexos

## 💡 Exemplo

Acesse o exemplo completo no repositório:
[https://github.com/rodrigoprestesmachado/cpw2/tree/dev/exemplos/vue-slots](https://github.com/rodrigoprestesmachado/cpw2/tree/dev/exemplos/vue-slots)

## Referências 📚

* [Slots no Vue.js](https://vuejs.org/guide/components/slots) - Vue.js Official Documentation
<!-- .element: style="margin-bottom:40px; font-size: 25px; color:white; font-family: arial;" -->

* [Vue.js](https://vuejs.org) - The Progressive JavaScript Framework
<!-- .element: style="margin-bottom:40px; font-size: 25px; color:white; font-family: arial;" -->

<center>
<a href="https://rpmhub.dev" target="blanck"><img src="../imgs/logo.png" alt="Rodrigo Prestes Machado" width="3%" height="3%" border=0 style="border:0; text-decoration:none; outline:none"></a><br/>
<a rel="license" href="http://creativecommons.org/licenses/by/4.0/">CC BY 4.0 DEED</a>
