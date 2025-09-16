---
layout: default
title: Vue components
parent: Vue.js
nav_order: 22
---

## Slots

Os Slots no Vue.js são uma funcionalidade que permite criar componentes reutilizáveis e ainda mais flexíveis. Eles funcionam como "buracos" ou "espaços reservados" nos componentes onde você pode inserir conteúdo dinâmico.

### 🔍 Tipos de Slots

Existem 

#### Slot Padrão (Default Slot)

O slot padrão é a forma mais simples de usar slots. Todo conteúdo passado para o componente será renderizado no local do <slot>.

```html
<card-component>
  <h3 class="title is-4">Conteúdo no Slot Padrão</h3>
  <p>Este conteúdo está sendo passado através do slot padrão.</p>
</card-component>
```

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

#### Slots Nomeados (Named Slots)

Os slots nomeados permitem definir múltiplos pontos de inserção de conteúdo em um componente, cada um com um nome específico.

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

#### Slots com Escopo (Scoped Slots)

Os slots com escopo permitem que o componente filho passe dados para o componente pai através do slot.

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

No exemplo acima, existe uma interpolação de dados `user` e `isOnline`. O usuário 


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

Neste exemplo, o componente UserCard passa o valor de `isOnline` para o componente pai através do slot.

### 💡 Vantagens dos Slots

* Flexibilidade: Permite personalizar componentes sem modificar sua estrutura
* Reutilização: Um componente pode ser usado em diferentes contextos
* Separação de Responsabilidades: O componente cuida da estrutura, o pai do conteúdo
* Composição: Facilita a criação de layouts complexos

### 📝 Resumo
Os slots no Vue.js são fundamentais para criar componentes flexíveis e reutilizáveis. Eles permitem:

* Slots Padrão: Inserção simples de conteúdo
* Slots Nomeados: Múltiplos pontos de inserção organizados
* Slots com Escopo: Compartilhamento de dados do filho para o pai
