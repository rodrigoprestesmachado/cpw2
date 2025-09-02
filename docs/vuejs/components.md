---
layout: default
title: Vue components
parent: Vue.js
nav_order: 22
---

## Módulos JS

Em JavaScript, módulos permitem dividir um programa em arquivos separados e
independentes, facilitando a organização e reutilização de código. Cada módulo
pode exportar variáveis, funções, classes ou objetos, que podem ser importados
por outros módulos. Isso resulta em um código mais limpo, fácil de manter e
melhora a colaboração em projetos maiores. Um exemplo simples:

```javascript
export function soma(a, b) {
  return a + b;
}
```
```javascript
import { soma } from ‘./math.js’;

console.log(soma(2, 3));
```

Para obter mais informações, acesse:

https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide/Modules

## Componentes

No Vue.js, existe o conceito de componente, que nada mais é do que blocos
reutilizáveis de código que representam partes da interface do usuário. Eles
permitem dividir uma aplicação em pedaços menores, organizados e independentes,
facilitando a manutenção e a reutilização. Nesse sentido, os componentes no Vue
pode ser considerados como módulos JavaScript.

Para criarmos um componente Vue em JavaScript podemos fazer o seguinte:

```javascript
export default {
  name: "MyImage",
};
```

Esse código exporta um objeto de definição de componente do Vue. O `export default { ... }`
diz ao Vue (e a outros arquivos que importarem) que esse objeto é um componente
Vue. A propriedade name: "MyImage" define o nome interno do componente.

Para usar esse componente, inicialmente temos que fazer um import

	import MyImage from "./MyImage.js";

E depois adicionar na aplicação Vue:

	app.component("my-image", MyImage);

Com isso, temos uma nova tag HTML chamada my-image que renderiza esse componente.

## Templates

No Vue.js, o template é a parte do componente onde você descreve a estrutura
visual que será renderizada na tela.

```javascript
export default {
  name: “MyImage",
  template: `
    <h1>Hello Template</h1>
  `
};
```

## Propriedades

No Vue.js, props (propriedades) são uma forma de passar dados para um componente.

```javascript
export default {
  name: "MyImage",
  props: {
    link: {
      type: String,
      required: true,
    },
    description: {
      type: String,
      required: false,
      default: "",
    },
  },
```

No exemplo acima, são definidas duas propriedades, link e description do tipo
String sendo que apenas a primeira é obrigatória. Um exemplo mais realista do
componente MyImage poderia ser escrito da seguinte maneira:

```javascript
export default {
  name: "MyImage",
  props: {
    link: {
      type: String,
      required: true,
    },
    description: {
      type: String,
      required: false,
      default: "",
    },
  },
  template: `
    <div class="card">
      <div class="card-image">
        <figure class="image is-128x128">
          <img
            :src="link"
            alt="description"
          />
        </figure>
      </div>
      <div class="card-content">
        <div class="content">
          <p>{{ description }}</p>
        </div>
      </div>
    </div>
  `,
  methods: {
  },
};
```

## V-bind

v-bind é uma diretiva que serve para ligar (bind) atributos de elementos HTML ou
props de componentes a valores dinâmicos do Vue (variáveis, expressões ou
funções).

Em um componente, se você escrever `<img src=“link">` o navegador irá entender que
a palavra link como um texto. Porém, escrevendo `<img v-bind:src=“link”>` Vue
avalia a variável link do componente e coloca o valor correto no atributo src.
Note que você pode utilizar : como um atalho para v-bind, por exemplo:
`<img :src=“link”>`.

## Exemplo

Para obter um exemplo funcional acesse o endereço:

https://github.com/rodrigoprestesmachado/cpw2/tree/main/exemplos/vue-components

## Referências 📚

* [Vue.js](https://vuejs.org) - The Progressive JavaScript Framework
<!-- .element: style="margin-bottom:40px; font-size: 25px; color:white; font-family: arial;" -->

<center>
<a href="https://rpmhub.dev" target="blanck"><img src="../imgs/logo.png" alt="Rodrigo Prestes Machado" width="3%" height="3%" border=0 style="border:0; text-decoration:none; outline:none"></a><br/>
<a rel="license" href="http://creativecommons.org/licenses/by/4.0/">CC BY 4.0 DEED</a>
