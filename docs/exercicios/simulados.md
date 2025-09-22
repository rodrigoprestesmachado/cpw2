---
layout: default
title: Simulados
parent:
nav_order: 50
---

# Simulado Primeira Parte

## Questões Práticas

1. Crie um pequeno componente Vue que:
    * Tenha no data uma variável chamada mensagem iniciada com o valor "Olá Vue!".
	* Exiba essa variável no HTML.
	* Tenha um campo de texto (`<input>`) ligado a essa variável usando v-model.
	* Ao digitar no input, o texto mostrado na tela deve ser atualizado automaticamente.

2. Crie uma instância Vue simples que:
	* Monte no elemento <div id="app"></div>
	* Tenha no data uma lista chamada frutas com os valores: "Maçã", "Banana", "Laranja"
	* Mostre a lista no HTML usando v-for.

3. Crie um componente Vue chamado "Contador" que:
	* Tenha uma propriedade chamada "inicial" que recebe um número.
	* Exiba o valor atual do contador no template.
	* Tenha um botão que, ao ser clicado, incrementa o contador em 1.

## Questões Teóricas

1. Em JavaScript, qual palavra-chave é usada para declarar uma variável cujo
valor pode mudar ao longo do tempo?
* A) const
* B) static
* C) let
* D) fixed

2. Qual dos seguintes tipos primitivos NÃO existe em JavaScript?
* A) String
* B) Number
* C) Character
* D) Boolean

3. O operador === em JavaScript compara:
* A) apenas valor, convertendo tipos se necessário
* B) valor e tipo, sem conversão de tipo
* C) apenas tipo
* D) endereço de memória

5. Em JavaScript, qual das seguintes formas de função é anônima?
* A) function soma(a, b) { return a + b; }
* B) let sub = function(a, b) { return a - b; };
* C) const mult = (a, b) => a * b;
* D) As alternativas B e C

6. Se você quiser capturar o clique de um botão num HTML usando JavaScript, qual evento normalmente seria usado?
* A) onload
* B) onclick
* C) onmouseover
* D) onchange

7. Qual será o resultado do código abaixo?

```javascript
let x = 5;
if (x > 3) {
  console.log("Maior que 3");
} else {
  console.log("Menor ou igual a 3");
}
```

* A) Nada acontece
* B) Exibe “Maior que 3”
* C) Exibe “Menor ou igual a 3”
* D) Erro de sintaxe

8. Em JavaScript, qual operador “lógico E” (AND) seria usado para combinar duas condições?
* A) `||`
* B) `&&`
* C) `&`
* D) `AND`

9. Qual afirmativa sobre funções em JavaScript é verdadeira?
* A) Toda função deve retornar algo (returns) obrigatoriamente
* B) Funções podem ser atribuídas a variáveis
* C) Funções não podem receber outras funções como argumento
* D) Funções não podem ser definidas dentro de outras funções

10. O que é o Vue.js?
* A) Uma biblioteca para manipular estilos CSS dinamicamente.
* B) Um framework para a construção de interfaces de usuário com componentes reativos.
* C) Um pré-processador de HTML.
* D) Um sistema de gerenciamento de banco de dados.

11. Qual das opções abaixo melhor descreve “componentes” no contexto do Vue?
* A) Funções puras que não mantêm estado e são chamadas apenas uma vez.
* B) Blocos reutilizáveis que encapsulam template, script e estilo, podendo ter estado, propriedades e eventos.
* C) Somente templates HTML sem lógica de JavaScript.
* D) Apenas uma maneira de inserir CSS inline em templates.

12. Qual das alternativas representa corretamente como definir uma prop (propriedade) em um componente Vue?
* A) No componente filho, dentro de props: ['nome'].
* B) No componente pai, dentro de data().
* C) No componente filho, dentro de methods.
* D) No componente pai, dentro de props: ['nome'].

13. Em Vue.js, qual diretiva é usada para renderização condicional de elementos no template?
* A) v-for
* B) v-if
* C) v-bind
* D) v-show

14. Qual diretiva Vue é usada para fazer loop em listas e renderizar um elemento para cada item?
* A) v-for
* B) v-loop
* C) v-repeat
* D) v-each

15. No Vue.js, para que serve a seção methods dentro de um componente?
* A) Declarar variáveis reativas que o Vue observa.
* B) Criar propriedades computadas que dependem de dados reativos.
* C) Configurar eventos de ciclo de vida do componente.
* D) Definir funções que podem ser chamadas a partir do template ou internamente no componente.

16. No Vue.js, qual é a forma correta de declarar a propriedade data dentro de um componente para garantir que cada instância tenha seu próprio estado independente?

* A)
```javascript
data: {
  contador: 0
}
```

* B)
```javascript
data() {
  return {
    contador: 0
  }
}
```

* C)
```javascript
let data = {
  contador: 0
}
```

* D)
```javascript
data: () => {
  contador: 0
}
```

17. No Vue 3, qual é a função do método .mount()?
* A) Montar o componente no DOM, vinculando-o a um elemento HTML.
* B) Iniciar o ciclo de vida e renderizar apenas o template sem inserir no DOM.
* C) Criar automaticamente um servidor local para rodar a aplicação.
* D) Registrar globalmente componentes em toda a aplicação.

18. Em Vue.js, qual é a função do método $emit dentro de um componente filho?
* A) Atualizar diretamente os dados do componente pai.
* B) Substituir métodos definidos no pai.
* C) Disparar um evento personalizado para que o componente pai possa escutar e reagir.
* D) Criar automaticamente uma prop no componente pai.

19. Qual diretiva Vue é usada para vincular atributos HTML ou props de componentes a valores dinâmicos?
* A) v-model
* B) v-bind
* C) v-for
* D) v-html

20. No Vue.js, qual é a principal utilidade da diretiva v-model?
* A) Criar automaticamente eventos personalizados entre componentes.
* B) Sincronizar valores de forma bidirecional entre o estado do componente e um campo de formulário.
* C) Substituir completamente a diretiva v-bind.
* D) Renderizar listas dinamicamente com base em arrays.

