---
layout: default
title: Exercícios Vue.js
parent: Vue.js
nav_order: 27
---

# Exercícios sobre Vue.js

- **Exercício 1:** Crie uma lista de tarefas simples em Vue onde:
    1. Renderize uma lista a partir de um array.
    2. Mostre cada item dinamicamente com v-for.

- **Exercício 2:** Utilizando a ideia de componentes, crie um componente de item
de tarefa que receba as propriedades necessárias e seja que reutilizável.

- **Exercício 3:** Crie um componente de formulário que permita implementar um
CRUD completo de objetos tarefas, incluindo:
    1. **Create**: Adicionar novas tarefas à lista
    2. **Read**: Exibir todas as tarefas existentes
    3. **Update**: Editar tarefas existentes
    4. **Delete**: Remover tarefas da lista

**Nota:** Use como [base](https://github.com/rodrigoprestesmachado/cpw2/tree/dev/exemplos/vue-components-tasks)
o código de exemplo para a realização desse exercício.

- **Exercício 4:** Baseie-se no [tutorial](https://www.w3schools.com/vue/vue_scale-up.php) para realizar o exercício 3 novamente, porém, agora no formato de projeto do Vue.


- **Exercício 5:** Primeiro, abra o projeto `cpw2-todo` por meio do Codespace e
realize as seguintes modificações:

  1. Utilize o Bulma.io para ajustar o CSS do componente `Task.vue`, garantindo
    uma organização visual adequada.

  2. No componente `TaskApp.vue`, modifique a função `beforeMount` para implementar
  as diretivas `async/await`.

[![Open in Codespaces](https://github.com/codespaces/badge.svg)](https://github.com/codespaces/new?hide_repo_select=true&repo=rpmhubdev/cpw2-todo)

**Nota:** Para rodar o projeto é necessário que você execute os seguintes
comandos na linha de comando:

```bash
npm install
npm run dev
```
