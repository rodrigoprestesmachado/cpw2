---
layout: default
title: Exercícios Vue.js
parent: Vue.js
nav_order: 27
---

# Exercícios sobre Vue.js

- **Exercício 1**: Crie uma lista de tarefas simples em Vue onde:
    1. Renderize uma lista a partir de um array.
    2. Mostre cada item dinamicamente com v-for.

- **Exercício 2**: Utilizando a ideia de componentes, crie um componente de item
de tarefa que receba as propriedades necessárias e seja que reutilizável.

- **Exercício 3**: Crie um componente de formulário que permita implementar um
CRUD completo de objetos tarefas, incluindo:
    1. **Create**: Adicionar novas tarefas à lista
    2. **Read**: Exibir todas as tarefas existentes
    3. **Update**: Editar tarefas existentes
    4. **Delete**: Remover tarefas da lista

**Nota:** Use como [base](https://github.com/rodrigoprestesmachado/cpw2/tree/dev/exemplos/vue-components-tasks)
o código de exemplo para a realização desse exercício.

- **Exercício 4**: Crie um componente de lista que permita customizar:
    1. Como cada item é exibido (slot com escopo)
    2. Cabeçalho da lista (slot nomeado)
    3. Mensagem quando vazia (slot condicional)