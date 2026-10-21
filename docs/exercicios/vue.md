---
layout: default
title: Exercícios
parent: Frameworks
nav_order: 25
---

{% raw %}

# Exercícios de projeto sobre Vue.js

Estes exercícios continuam os
[exercícios de fixação da aula de Vue](https://cpw2.rpmhub.dev/vuejs/vuejs.html#exercícios-de-fixação-práticos).
Cada um é curto. Somados, eles montam um CRUD: criar, ler, atualizar e apagar.
{: .fs-3 }

Não pule. O seguinte usa o que o anterior já deixou na tela. Se travar, volte
à aula indicada.
{: .fs-3 }

O mapa:
{: .fs-3 }

1. Partes 1 a 4: CRUD na memória
2. Parte 5: os mesmos componentes em arquivos `.vue`
3. Parte 6: um projeto pronto
4. Parte 7: o mesmo CRUD no servidor
5. Parte 8: o mesmo CRUD, agora com despesas
{: .fs-3 }

## Parte 1: ler

### Exercício 1: três tarefas na tela

Crie uma página Vue com um array `tarefas` de três textos, por exemplo
`["Estudar Vue", "Fazer os exercícios", "Beber água"]`. Mostre cada uma com
`v-for` num `<li>`.
{: .fs-3 }

Pronto quando as três linhas aparecerem.
{: .fs-3 }

### Exercício 2: um componente só para mostrar

Extraia um `TaskItem` que recebe a tarefa por `props` e só escreve o texto.
O pai continua com o array e o `v-for`.
{: .fs-3 }

Pronto quando a lista parecer igual, mas cada linha for um `<TaskItem>`.
{: .fs-3 }

Se travar, volte às propriedades na aula de
[Componentes](https://cpw2.rpmhub.dev/vuejs/components.html).
{: .fs-3 }

## Parte 2: criar

### Exercício 3: botão Adicionar

No pai, coloque um `<input>` com `v-model` e um botão. Ao clicar, faça
`push` do texto no array.
{: .fs-3 }

Pronto quando um texto novo aparecer no fim da lista.
{: .fs-3 }

### Exercício 4: não aceite vazio

No mesmo método, ignore o envio se o campo estiver vazio ou só com espaços.
Depois de adicionar, limpe o input.
{: .fs-3 }

Pronto quando clicar com o campo vazio não criar linha em branco.
{: .fs-3 }

### Exercício 5: o formulário só avisa

Mova o input e o botão para um `TaskForm`. Ao enviar, o filho emite o texto.
O pai ouve o evento e faz o `push`.
{: .fs-3 }

Pronto quando ainda der para adicionar, mas o input não estiver no pai.
{: .fs-3 }

Se travar, volte a `$emit` na aula de
[Componentes](https://cpw2.rpmhub.dev/vuejs/components.html).
{: .fs-3 }

## Parte 3: apagar

### Exercício 6: botão Remover no pai

No `v-for`, use o índice. Coloque um botão "Remover" ao lado de cada item e
chame `splice` no array.
{: .fs-3 }

Pronto quando clicar e a linha sumir.
{: .fs-3 }

### Exercício 7: quem remove é o pai, quem avisa é o filho

Passe o botão "Remover" para dentro do `TaskItem`. O filho emite o evento. O
pai continua fazendo o `splice`.
{: .fs-3 }

Pronto quando remover ainda funcionar, agora pelo componente do item.
{: .fs-3 }

## Parte 4: atualizar

### Exercício 8: a tarefa vira um objeto

Troque cada texto do array por um objeto `{ texto: "Estudar Vue", feita: false }`.
No `TaskItem`, mostre só `tarefa.texto`. Ainda não use o campo `feita`.
{: .fs-3 }

Pronto quando a lista continuar igual, agora lendo `.texto`.
{: .fs-3 }

### Exercício 9: marcar como feita

No `TaskItem`, um botão "Feito" emite o índice. O pai troca `feita` para o
contrário do valor atual.
{: .fs-3 }

Mostre o texto diferente quando `feita` for verdadeiro, por exemplo com um
`v-if`.
{: .fs-3 }

Pronto quando clicar e a linha mudar, e clicar de novo desfizer.
{: .fs-3 }

### Exercício 10: o texto volta para o campo

No pai, um botão "Editar" copia `tarefa.texto` para o campo do formulário.
Ainda não grave. Só preencha o input.
{: .fs-3 }

Pronto quando clicar em Editar e o texto da linha aparecer no campo.
{: .fs-3 }

### Exercício 11: salvar no mesmo lugar

Guarde o índice da tarefa em edição. Ao enviar o formulário, se houver
índice, troque o texto no array. Se não houver, continue fazendo `push`.
{: .fs-3 }

Pronto quando editar "Beber água" para "Beber suco" e a linha mudar, sem
criar um item novo.
{: .fs-3 }

### Exercício 12: editar também sai do filho

O botão "Editar" vai para o `TaskItem` e emite o índice. O pai entrega o
texto ao `TaskForm` por `props`, e o campo já abre preenchido.
{: .fs-3 }

Pronto quando criar, ver, marcar como feita, editar e apagar funcionarem
juntos. Isso é o CRUD em memória.
{: .fs-3 }

Se quiser comparar depois de tentar, use o exemplo
[vue-components-tasks](https://github.com/rodrigoprestesmachado/cpw2/tree/dev/exemplos/vue-components-tasks).
{: .fs-3 }

## Parte 5: arquivos .vue

### Exercício 13: um arquivo por peça

Passe o pai, o `TaskItem` e o `TaskForm` para arquivos `.vue`, cada um com
`<template>` e `<script>`. O comportamento da Parte 4 permanece.
{: .fs-3 }

Pode seguir o
[tutorial de projeto Vue no W3Schools](https://www.w3schools.com/vue/vue_scale-up.php)
ou a aula de [Nuxt](https://cpw2.rpmhub.dev/vuejs/nuxt.html).
{: .fs-3 }

Pronto quando `npm run dev` abrir a lista e o CRUD continuar igual.
{: .fs-3 }

Se travar, volte aos arquivos `.vue` na aula de
[Componentes](https://cpw2.rpmhub.dev/vuejs/components.html).
{: .fs-3 }

## Parte 6: um projeto pronto

### Exercício 14: só o visual

Abra o `cpw2-todo` no Codespace:
{: .fs-3 }

[![Open in Codespaces](https://github.com/codespaces/badge.svg)](https://github.com/codespaces/new?hide_repo_select=true&repo=rpmhubdev/cpw2-todo)

```bash
npm install
npm run dev
```

No `Task.vue`, use classes do [Bulma](https://bulma.io), por exemplo um
`card` ou um `box`. Não mexa em mais nada neste exercício.
{: .fs-3 }

Pronto quando o item aparecer mais organizado na tela.
{: .fs-3 }

### Exercício 15: carregar com async/await

No `TaskApp.vue`, reescreva o carregamento que está em `beforeMount` com
`async`/`await` e `try`/`catch`. Isso é JavaScript da aula de
[Promise](https://cpw2.rpmhub.dev/promise/promise.html), não diretiva Vue.
{: .fs-3 }

Pronto quando a lista continuar aparecendo ao abrir a página.
{: .fs-3 }

## Parte 7: o servidor

O [JSON Server](https://github.com/typicode/json-server) finge ser uma API e
grava num `data.json`. Recarregar a página deixa de apagar os dados.
{: .fs-3 }

### Exercício 16: o servidor no navegador

```bash
npm install -g json-server
```

Crie um `data.json`:
{: .fs-3 }

```json
{
  "tasks": [
    { "id": "1", "name": "Task 1", "done": false },
    { "id": "2", "name": "Task 2", "done": false },
    { "id": "3", "name": "Task 3", "done": false }
  ]
}
```
{: .fs-3 }

```bash
json-server --watch data.json --port 3000
```

Abra `http://localhost:3000/tasks` no navegador. Ainda não ligue o Vue.
{: .fs-3 }

Se a porta 3000 estiver ocupada, use `--port 3001`.
{: .fs-3 }

Pronto quando o JSON das três tarefas aparecer no navegador.
{: .fs-3 }

### Exercício 17: ler no Vue (GET)

No `TaskApp`, busque a lista e coloque em `tarefas`. Chame isso no `mounted`.
{: .fs-3 }

```javascript
async carregar() {
  const response = await fetch("http://localhost:3000/tasks")
  this.tarefas = await response.json()
}
```
{: .fs-3 }

Não grave nada ainda.
{: .fs-3 }

Pronto quando as três tarefas do arquivo aparecerem na sua lista.
{: .fs-3 }

### Exercício 18: criar no servidor (POST)

`JSON.stringify` vira o objeto em texto JSON, que é o que o servidor entende.
{: .fs-3 }

```javascript
async criar(tarefa) {
  const response = await fetch("http://localhost:3000/tasks", {
    method: "POST",
    headers: { "Content-Type": "application/json" },
    body: JSON.stringify(tarefa)
  })
  const salva = await response.json()
  this.tarefas.push(salva)
}
```
{: .fs-3 }

Pronto quando adicionar uma tarefa, dar F5 e ela continuar lá.
{: .fs-3 }

### Exercício 19: apagar no servidor (DELETE)

```javascript
async apagar(id) {
  await fetch("http://localhost:3000/tasks/" + id, {
    method: "DELETE"
  })
  this.tarefas = this.tarefas.filter((tarefa) => tarefa.id !== id)
}
```
{: .fs-3 }

Pronto quando apagar, dar F5 e a tarefa não voltar.
{: .fs-3 }

### Exercício 20: atualizar no servidor (PUT)

Ao editar o texto ou marcar como feita, envie a tarefa inteira:
{: .fs-3 }

```javascript
async atualizar(tarefa) {
  await fetch("http://localhost:3000/tasks/" + tarefa.id, {
    method: "PUT",
    headers: { "Content-Type": "application/json" },
    body: JSON.stringify(tarefa)
  })
}
```
{: .fs-3 }

Pronto quando editar, dar F5 e a mudança continuar. Aí o CRUD está no
servidor também.
{: .fs-3 }

## Parte 8: a mesma ideia, outro assunto

Agora despesas, não tarefas. Cada despesa tem `id`, `descricao`, `categoria`
e `valor`.
{: .fs-3 }

Faça na mesma ordem: ler, criar, apagar, atualizar.
{: .fs-3 }

### Exercício 21: listar despesas

Monte um `despesas.json` (ou um `data.json` com a chave `despesas`) com duas
ou três despesas e mostre a lista com GET.
{: .fs-3 }

Pronto quando os dados do arquivo aparecerem na tela.
{: .fs-3 }

### Exercício 22: cadastrar despesa

Formulário com descrição, categoria e valor. POST no servidor. A lista
atualiza.
{: .fs-3 }

Pronto quando cadastrar, dar F5 e a despesa continuar.
{: .fs-3 }

### Exercício 23: excluir despesa

Botão para DELETE pelo `id`.
{: .fs-3 }

Pronto quando apagar, dar F5 e ela não voltar.
{: .fs-3 }

### Exercício 24: editar despesa

Um botão "Editar" preenche o formulário. Ao salvar, PUT no servidor.
{: .fs-3 }

Pronto quando mudar o valor, dar F5 e a mudança continuar. Isso fecha o CRUD
de despesas.
{: .fs-3 }

### Exercício 25: o total

Some os `valor` e mostre o total gasto na tela.
{: .fs-3 }

Pronto quando cadastrar duas, ver a soma certa, apagar uma e o total cair.
{: .fs-3 }

### Exercício 26: três componentes

Separe o que já funciona:
{: .fs-3 }

1. `ExpenseList` mostra a lista
2. `ExpenseForm` cadastra e edita
3. `SummaryCard` mostra o total
{: .fs-3 }

Pronto quando a tela fizer a mesma coisa, agora em três peças.
{: .fs-3 }

{% endraw %}

<center>
<a href="https://rpmhub.dev" target="blanck"><img src="../imgs/logo.png" alt="Rodrigo Prestes Machado" width="3%" height="3%" border=0 style="border:0; text-decoration:none; outline:none"></a><br/>
<a rel="license" href="http://creativecommons.org/licenses/by/4.0/">CC BY 4.0 DEED</a>
</center>
