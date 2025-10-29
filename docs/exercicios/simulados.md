---
layout: default
title:  Simulado 1a Parte
parent: Simulados
nav_order: 41
---

# Simulado da Primeira Parte

## Questões Práticas

1. Crie um pequeno componente Vue que:
    * Tenha no data uma variável chamada mensagem iniciada com o valor "Olá Vue!".
	* Exiba essa variável no HTML.
	* Tenha um campo de texto (`<input>`) ligado a essa variável usando v-model.
	* Ao digitar no input, o texto mostrado na tela deve ser atualizado automaticamente.
{: .fs-3 }

2. Crie uma instância Vue simples que:
	* Monte no elemento <div id="app"></div>
	* Tenha no data uma lista chamada frutas com os valores: "Maçã", "Banana", "Laranja"
	* Mostre a lista no HTML usando v-for.
{: .fs-3 }

3. Crie um componente Vue chamado "Contador" que:
	* Tenha uma propriedade chamada "inicial" que recebe um número.
	* Exiba o valor atual do contador no template.
	* Tenha um botão que, ao ser clicado, incrementa o contador em 1.
{: .fs-3 }

## Questões Teóricas

1. Em JavaScript, qual palavra-chave é usada para declarar uma variável cujo
valor pode mudar ao longo do tempo?
* A) const
* B) static
* C) let
* D) fixed
{: .fs-3 }

1. Qual dos seguintes tipos primitivos NÃO existe em JavaScript?
* A) String
* B) Number
* C) Character
* D) Boolean
{: .fs-3 }

1. O operador === em JavaScript compara:
* A) apenas valor, convertendo tipos se necessário
* B) valor e tipo, sem conversão de tipo
* C) apenas tipo
* D) endereço de memória
{: .fs-3 }

1. Em JavaScript, qual das seguintes formas de função é anônima?
* A) function soma(a, b) { return a + b; }
* B) let sub = function(a, b) { return a - b; };
* C) const mult = (a, b) => a * b;
* D) As alternativas B e C
{: .fs-3 }

1. Se você quiser capturar o clique de um botão num HTML usando JavaScript, qual evento normalmente seria usado?
* A) onload
* B) onclick
* C) onmouseover
* D) onchange
{: .fs-3 }

1. Qual será o resultado do código abaixo?
{: .fs-3 }

```javascript
let x = 5;
if (x > 3) {
  console.log("Maior que 3");
} else {
  console.log("Menor ou igual a 3");
}
```
{: .fs-3 }

* A) Nada acontece
* B) Exibe “Maior que 3”
* C) Exibe “Menor ou igual a 3”
* D) Erro de sintaxe
{: .fs-3 }

1. Em JavaScript, qual operador “lógico E” (AND) seria usado para combinar duas condições?
* A) `||`
* B) `&&`
* C) `&`
* D) `AND`
{: .fs-3 }

1. Qual afirmativa sobre funções em JavaScript é verdadeira?
* A) Toda função deve retornar algo (returns) obrigatoriamente
* B) Funções podem ser atribuídas a variáveis
* C) Funções não podem receber outras funções como argumento
* D) Funções não podem ser definidas dentro de outras funções
{: .fs-3 }

1.  O que é o Vue.js?
* A) Uma biblioteca para manipular estilos CSS dinamicamente.
* B) Um framework para a construção de interfaces de usuário com componentes reativos.
* C) Um pré-processador de HTML.
* D) Um sistema de gerenciamento de banco de dados.
{: .fs-3 }

1.  Qual das opções abaixo melhor descreve “componentes” no contexto do Vue?
* A) Funções puras que não mantêm estado e são chamadas apenas uma vez.
* B) Blocos reutilizáveis que encapsulam template, script e estilo, podendo ter estado, propriedades e eventos.
* C) Somente templates HTML sem lógica de JavaScript.
* D) Apenas uma maneira de inserir CSS inline em templates.
{: .fs-3 }

1.  Qual das alternativas representa corretamente como definir uma prop (propriedade) em um componente Vue?
* A) No componente filho, dentro de props: ['nome'].
* B) No componente pai, dentro de data().
* C) No componente filho, dentro de methods.
* D) No componente pai, dentro de props: ['nome'].
{: .fs-3 }

1.  Em Vue.js, qual diretiva é usada para renderização condicional de elementos no template?
* A) v-for
* B) v-if
* C) v-bind
* D) v-show
{: .fs-3 }

1.  Qual diretiva Vue é usada para fazer loop em listas e renderizar um elemento para cada item?
* A) v-for
* B) v-loop
* C) v-repeat
* D) v-each
{: .fs-3 }

1.  No Vue.js, para que serve a seção methods dentro de um componente?
* A) Declarar variáveis reativas que o Vue observa.
* B) Criar propriedades computadas que dependem de dados reativos.
* C) Configurar eventos de ciclo de vida do componente.
* D) Definir funções que podem ser chamadas a partir do template ou internamente no componente.
{: .fs-3 }

1.  No Vue.js, qual é a forma correta de declarar a propriedade data dentro de
um componente para garantir que cada instância tenha seu próprio estado
independente?
{: .fs-3 }

* A)
```javascript
data: {
  contador: 0
}
```
{: .fs-3 }

* B)
```javascript
data() {
  return {
    contador: 0
  }
}
```
{: .fs-3 }

* C)
```javascript
let data = {
  contador: 0
}
```
{: .fs-3 }

* D)
```javascript
data: () => {
  contador: 0
}
```
{: .fs-3 }

1.  No Vue 3, qual é a função do método .mount()?
* A) Montar o componente no DOM, vinculando-o a um elemento HTML.
* B) Iniciar o ciclo de vida e renderizar apenas o template sem inserir no DOM.
* C) Criar automaticamente um servidor local para rodar a aplicação.
* D) Registrar globalmente componentes em toda a aplicação.
{: .fs-3 }

1.  Em Vue.js, qual é a função do método $emit dentro de um componente filho?
* A) Atualizar diretamente os dados do componente pai.
* B) Substituir métodos definidos no pai.
* C) Disparar um evento personalizado para que o componente pai possa escutar e reagir.
* D) Criar automaticamente uma prop no componente pai.
{: .fs-3 }

1.  Qual diretiva Vue é usada para vincular atributos HTML ou props de componentes a valores dinâmicos?
* A) v-model
* B) v-bind
* C) v-for
* D) v-html
{: .fs-3 }

1.  No Vue.js, qual é a principal utilidade da diretiva v-model?
* A) Criar automaticamente eventos personalizados entre componentes.
* B) Sincronizar valores de forma bidirecional entre o estado do componente e um campo de formulário.
* C) Substituir completamente a diretiva v-bind.
* D) Renderizar listas dinamicamente com base em arrays.
{: .fs-3 }
