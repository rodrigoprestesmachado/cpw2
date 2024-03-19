<!-- .slide:  data-background-opacity="0.3" data-background-image="imgs/title.jpg" data-transition="convex"  -->
# Introdução ao Vue.js
<!-- .element: style="margin-bottom:100px; font-size: 50px; color:white; font-family: Marker Felt;" -->

Pressione 'F' para tela cheia
<!-- .element: style="font-size: small; color:white;" -->

[versão em pdf](?print-pdf)
<!-- .element: style="font-size: small;" -->


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
# O que é Vue.js?
<!-- .element: style="margin-bottom:50px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

* Vue.js é um framework de JavaScript de código aberto usado para construir interfaces de usuário.
<!-- .element: style="margin-bottom:100px; font-size: 23px; font-family: arial; color:#F5F5F5" -->

* Se concentra principalmente na camada de visualização e pode ser facilmente integrado com projetos existentes ou usados como uma estrutura completa de desenvolvimento.
<!-- .element: style="margin-bottom:50px; font-size: 23px; font-family: arial; color:#F5F5F5" -->


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
## Por que usar Vue.js?
<!-- .element: style="margin-bottom:50px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

* Simplicidade: Vue.js tem uma curva de aprendizado suave e uma sintaxe concisa.
<!-- .element: style="margin-bottom:100px; font-size: 23px; font-family: arial; color:#F5F5F5" -->

* Componentização: Vue.js segue o conceito de componentização, permitindo que você divida a interface do usuário em componentes reutilizáveis e independentes.
<!-- .element: style="margin-bottom:100px; font-size: 23px; font-family: arial; color:#F5F5F5" -->

* Ecossistema abrangente: Vue.js possui um ecossistema rico de bibliotecas e ferramentas complementares, como [Vue Router](https://router.vuejs.org) para roteamento e [Vuex](https://vuex.vuejs.org) para gerenciamento de estado.
<!-- .element: style="margin-bottom:100px; font-size: 23px; font-family: arial; color:#F5F5F5" -->


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
# Vue 🤓
<!-- .element: style="margin-bottom:50px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

* [Vue.js](https://vuejs.org) permite estender HTML com atributos chamados diretivas
<!-- .element: style="margin-bottom:50px; font-size: 23px; font-family: arial; color:#F5F5F5" -->

* As diretivas [Vue.js](https://vuejs.org) oferecem funcionalidade para aplicativos HTML
<!-- .element: style="margin-bottom:50px; font-size: 23px; font-family: arial; color:#F5F5F5" -->

* Vue.js fornece diretivas próprias e diretivas definidas pelo usuário
<!-- .element: style="margin-bottom:50px; font-size: 23px; font-family: arial; color:#F5F5F5" -->


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
# Exemplo
<!-- .element: style="margin-bottom:50px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

```js
<html lang="en">
<head>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.7.13/dist/vue.js"></script>
    <title>Hello Vue</title>
</head>
<body>
    <div id="app">
        <h1>{{ message }}</h1>
    </div>
    <script>
        var app = new Vue({
            el: '#app',
            data: {message: 'Hello Vue in CPW2!'}
        })
    </script>
</body>
</html>
```
<!-- .element: style="margin-bottom:50px; font-size: 18px; font-family: Courier New; background-color: white" -->


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
# Two-Way Binding
<!-- .element: style="margin-bottom:50px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

* A diretiva v-model vincula o valor dos elementos HTML com os dados da aplicação e vice versa
<!-- .element: style="margin-bottom:50px; font-size: 23px; font-family: arial; color:#F5F5F5" -->

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.7.13/dist/vue.js"></script>
    <title>Two Way Binding</title>
</head>
    <h2>Vue.js</h2>

    <div id="app">
    <p>{{ message }}</p>
    <p><input v-model="message"></p>
    </div>

    <script>
        myObject = new Vue({
            el: '#app',
            data: {message: 'Hello Vue.js in CPW2!'}
        })
    </script>
</body>
</html>
```
<!-- .element: style="margin-bottom:50px; font-size: 18px; font-family: Courier New; background-color: white" -->


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
# v-for
<!-- .element: style="margin-bottom:50px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

* A diretiva v-for vincula um array de objetos Vue com um array de elementos HTML
<!-- .element: style="margin-bottom:50px; font-size: 23px; font-family: arial; color:#F5F5F5" -->

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.7.13/dist/vue.js"></script>
    <title>v-for</title>
</head>
<body>
    <h2>Vue.js in CPW2</h2>

    <div id="app">
      <ul>
        <li v-for="x in task">
          {{ x.text }}
        </li>
      </ul>
    </div>

    <script>
        app = new Vue({
            el: '#app',
            data: {
                task: [
                    { text: 'Learn JavaScript' },
                    { text: 'Learn Vue.js' },
                    { text: 'Build Something Awesome' }
                ]
            }
        });
    </script>
</body>
</html>
```
<!-- .element: style="margin-bottom:50px; font-size: 16px; font-family: Courier New; background-color: white" -->


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
# v-if
<!-- .element: style="margin-bottom:50px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

* A diretiva v-if permite uma renderização condicional
<!-- .element: style="margin-bottom:50px; font-size: 23px; font-family: arial; color:#F5F5F5" -->

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.7.13/dist/vue.js"></script>
    <title>v-if</title>
</head>
<body>
    <div id="app">

      <h1 v-if="show">Vue é incrível!</h1>
      <h1 v-else>Oh não 😢</h1>

      <!-- Com template -->
      <template v-if="show">
        <p>Parágrafo 1</p>
      </template>

    </div>

    <script>
        app = new Vue({
            el: '#app',
            data: {
                show : true
            }
        });
    </script>
</body>
</html>
```
<!-- .element: style="margin-bottom:50px; font-size: 16px; font-family: Courier New; background-color: white" -->


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
# v-on
<!-- .element: style="margin-bottom:50px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

* A diretiva v-on permite que você possa reagir aos eventos
<!-- .element: style="margin-bottom:50px; font-size: 23px; font-family: arial; color:#F5F5F5" -->

```html
<!DOCTYPE html>
<html lang="en">

<head>
  <script src="https://cdn.jsdelivr.net/npm/vue@2.7.13/dist/vue.js"></script>
  <title>v-on</title>
</head>

<body>

  <div id="app">
    <button v-on:click="execute">Try</button>
  </div>

  <script>
    app = new Vue({
      el: '#app',

      data: {
      },

      methods: {
        execute: function (event) {
          alert(event.target.tagName)
        }
      }

    });
  </script>
</body>
</html>
```
<!-- .element: style="margin-bottom:50px; font-size: 16px; font-family: Courier New; background-color: white" -->


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
# Ciclo de Vida no Vue.js
<!-- .element: style="margin-bottom:30px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

* O Vue.js oferece uma série métodos especiais que permitem que você execute código em diferentes estágios do ciclo de vida de um componente.
<!-- .element: style="margin-bottom:30px; font-size: 20px; font-family: arial; color:#F5F5F5" -->

* Esses métodos especiais que são chamados automaticamente pelo Vue em momentos específicos durante a vida útil de um componente.
<!-- .element: style="margin-bottom:30px; font-size: 20px; font-family: arial; color:#F5F5F5" -->

<img src="https://miro.medium.com/v2/resize:fit:640/format:webp/1*lBnwGh3SmgTgUq0AqJ7QJQ.png" alt="Ciclo de Vida" width="35%" height="35%" border=0 style="border:0; text-decoration:none; outline:none">

<img src="https://miro.medium.com/v2/resize:fit:640/format:webp/1*LdrOYrIQrfzgbgqaSTA2WA.png" alt="Ciclo de Vida" width="35%" height="35%" border=0 style="border:0; text-decoration:none; outline:none">


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
# Ciclo de Vida: beforeCreate
<!-- .element: style="margin-bottom:50px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

* Chamado antes que a instância do Vue seja criada.
<!-- .element: style="margin-bottom:50px; font-size: 23px; font-family: arial; color:#F5F5F5" -->

* Neste estágio, as propriedades do componente ainda não foram inicializadas e não estão acessíveis.
<!-- .element: style="margin-bottom:50px; font-size: 23px; font-family: arial; color:#F5F5F5" -->


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
# Ciclo de Vida: created
<!-- .element: style="margin-bottom:50px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

* Chamado após a criação da instância do Vue.
<!-- .element: style="margin-bottom:50px; font-size: 23px; font-family: arial; color:#F5F5F5" -->

* Neste estágio, as propriedades do componente foram inicializadas e você pode realizar tarefas de inicialização adicionais.
<!-- .element: style="margin-bottom:50px; font-size: 23px; font-family: arial; color:#F5F5F5" -->


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
# Ciclo de Vida: mounted
<!-- .element: style="margin-bottom:50px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

* Chamado quando o componente é inserido no DOM.
<!-- .element: style="margin-bottom:50px; font-size: 23px; font-family: arial; color:#F5F5F5" -->

* Neste estágio, o componente é visível e pode ser acessado no DOM. Você pode interagir com elementos do DOM e realizar operações adicionais.
<!-- .element: style="margin-bottom:50px; font-size: 23px; font-family: arial; color:#F5F5F5" -->


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
# Ciclo de Vida: updated
<!-- .element: style="margin-bottom:50px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

* Chamado após uma reativação ou atualização do componente.
<!-- .element: style="margin-bottom:50px; font-size: 23px; font-family: arial; color:#F5F5F5" -->

* Neste estágio, o componente foi atualizado e pode ter sofrido alterações nos dados. Você pode realizar operações adicionais após a atualização.
<!-- .element: style="margin-bottom:50px; font-size: 23px; font-family: arial; color:#F5F5F5" -->


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
# Ciclo de Vida: destroyed
<!-- .element: style="margin-bottom:50px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

* Chamado quando o componente é destruído e removido do DOM.
<!-- .element: style="margin-bottom:50px; font-size: 23px; font-family: arial; color:#F5F5F5" -->

* Neste estágio, o componente foi destruído e você deve limpar quaisquer recursos adicionais ou manipuladores de eventos associados.
<!-- .element: style="margin-bottom:50px; font-size: 23px; font-family: arial; color:#F5F5F5" -->


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
# Integração com o Axios
<!-- .element: style="margin-bottom:50px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

```html
<!DOCTYPE html>
<html lang="en">
<head>
  <script src="https://cdn.jsdelivr.net/npm/vue@2.7.13/dist/vue.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <title>Axios</title>
</head>
<body>
  <div id="app">
    <button v-on:click="getData">load data</button>
    <ul>
      <li v-for="x in tasks">
        {{ x.text }}
      </li>
    </ul>
  </div>

  <script>
    app = new Vue({
      el: '#app',

      data() {
        return {
          tasks: null
        }
      },

      methods: {
        getData: function (event) {
          axios.get("data.json")
          .then(response => (this.tasks = response.data))
        }
      }

    });
  </script>
</body>
</html>
```
<!-- .element: style="margin-bottom:50px; font-size: 16px; font-family: Courier New; background-color: white" -->


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
# Questões 📚
<!-- .element: style="margin-bottom:50px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

<center>
<iframe src="https://cpw2.rpmhub.dev/vuejs/slides/questions.html" title="Vue.js" width="90%" height="500" style="border:none;"></iframe>
</center>


<!-- .slide:  data-background-opacity="0.1" data-background-image="https://miro.medium.com/max/1800/1*6ahbWjp_g9hqhaTDSJOL1Q.png" data-transition="convex"  -->
# Referências 📚
<!-- .element: style="margin-bottom:50px; font-size: 50px; color:2B2625; font-family: Marker Felt;" -->

* [O que é Vue.js?](https://www.w3schools.com/whatis/whatis_vue.asp) - W3CSchool
<!-- .element: style="margin-bottom:40px; font-size: 25px; color:white; font-family: arial;" -->

* [Vue.js](https://vuejs.org) - The Progressive JavaScript Framework
<!-- .element: style="margin-bottom:40px; font-size: 25px; color:white; font-family: arial;" -->

* [Axios](https://axios-http.com/docs/intro) - Promise based HTTP client for the browser and node.js
<!-- .element: style="margin-bottom:40px; font-size: 25px; color:white; font-family: arial;" -->

<center>
<a href="https://rpmhub.dev" target="blanck"><img src="../../imgs/logo.png" alt="Rodrigo Prestes Machado" width="3%" height="3%" border=0 style="border:0; text-decoration:none; outline:none"></a><br/>
<a rel="license" href="http://creativecommons.org/licenses/by/4.0/">Creative Commons Atribuição 4.0 Internacional</a>
<!-- .element: style="margin-bottom:40px; font-size: 14px; color:white; font-family: arial;" -->