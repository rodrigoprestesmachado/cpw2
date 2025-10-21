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
{: .fs-3 }

- **Exercício 2:** Utilizando a ideia de componentes, crie um componente de item
de tarefa que receba as propriedades necessárias e seja que reutilizável.
{: .fs-3 }

- **Exercício 3:** Crie um componente de formulário que permita implementar um
CRUD completo de objetos tarefas, incluindo:
    1. **Create**: Adicionar novas tarefas à lista
    2. **Read**: Exibir todas as tarefas existentes
    3. **Update**: Editar tarefas existentes
    4. **Delete**: Remover tarefas da lista
{: .fs-3 }

**Nota:** Use como [base](https://github.com/rodrigoprestesmachado/cpw2/tree/dev/exemplos/vue-components-tasks)
o código de exemplo para a realização desse exercício.
{: .fs-3 }

- **Exercício 4:** Baseie-se no [tutorial](https://www.w3schools.com/vue/vue_scale-up.php) para realizar o exercício 3 novamente, porém, agora no formato de projeto do Vue.
{: .fs-3 }

- **Exercício 5:** Primeiro, abra o projeto `cpw2-todo` por meio do Codespace e
realize as seguintes modificações:
{: .fs-3 }

  1. Utilize o Bulma.io para ajustar o CSS do componente `Task.vue`, garantindo
    uma organização visual adequada.
{: .fs-3 }

  2. No componente `TaskApp.vue`, modifique a função `beforeMount` para implementar
  as diretivas `async/await`.
{: .fs-3 }

[![Open in Codespaces](https://github.com/codespaces/badge.svg)](https://github.com/codespaces/new?hide_repo_select=true&repo=rpmhubdev/cpw2-todo)

**Nota:** Para rodar o projeto é necessário que você execute os seguintes
comandos na linha de comando:
{: .fs-3 }

```bash
npm install
npm run dev
```
{: .fs-3 }

- **Exercício 6:**

Para implementar esse exercício primeiro instale o JSON server no seu Code Space.
O JSON Server é uma ferramenta que permite criar uma API RESTful falsa
rapidamente, utilizando um arquivo JSON como banco de dados.
{: .fs-3 }

```bash
npm install -g json-server
```
{: .fs-3 }

Para rodar o servidor:
{: .fs-3 }

```bash
json-server --watch data.json --port 3000
```
{: .fs-3 }

O json-server irá observer arquivo data.json (abaixo) na porta 3000 do HTTP:
{: .fs-3 }

```json
{
    "tasks":[
    { "id": "1", "name": "Task 1", "description": "Description for Task 1", "done": false },
    { "id": "2", "name": "Task 2", "description": "Description for Task 2", "done": false },
    { "id": "3", "name": "Task 1", "description": "Description for Task 3", "done": false }
  ]
}
```
{: .fs-3 }

A saìda do JSON Server irá criar o seguinte endpoint:
{: .fs-3 }

Endpoints:
http://localhost:3000/tasks
{: .fs-3 }

Se por exemplo você necessitar realizar operaçoes na tarefa 2, voce pode utilizar
o seguinte endpoint:
http://localhost:3000/tasks/2
{: .fs-3 }

Depois de instalado, atualize o seu sistema para poder criar novas tarefas no
arquivo data.json
{: .fs-3 }

Exemplo de requisição PUT para o servidor implementada com o método fetch
{: .fs-3 }

```javascript
async updateTask(task) {
  try {
    const response = await fetch(`http://localhost/tasks/${task.id}`, {
    method: 'PUT',
    headers: {
      'Content-Type': 'application/json'
    },
    body: JSON.stringify(updatedTask)
  });
  if (response.ok) {
    alert('Task updated successfully!');
  }
  }
  catch (error) {
    console.error('Error updating task:', error);
  }
}
```
{: .fs-3 }

Nota: JSON.stringify() transforma um objeto JavaScript em uma string no formato
JSON. Por exemplo:
{: .fs-3 }

```javascript
const tarefa = {
  titulo: "Estudar Vue",
  concluida: false
}
```
{: .fs-3 }

Será transformada para:
{: .fs-3 }

```txt
{"titulo":"Estudar Vue","concluida":false}
```
{: .fs-3 }
