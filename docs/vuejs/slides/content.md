<!-- .slide:  data-background-opacity="0.1" data-background-image="https://miro.medium.com/max/1800/1*6ahbWjp_g9hqhaTDSJOL1Q.png" data-transition="convex"  -->
# Vue
<!-- .element: style="margin-bottom:100px; font-size: 50px; color:white; font-family: Marker Felt;" -->

Pressione 'F' para tela cheia
<!-- .element: style="font-size: small; color:white;" -->

[versão em pdf](?print-pdf)
<!-- .element: style="font-size: small;" -->


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
# Vue 🤓
<!-- .element: style="margin-bottom:50px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

* [Vue.js](https://vuejs.org) permite estender HTML com atributos HTML chamados diretivas
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


<!-- .slide:  data-background-opacity="0.1" data-background-image="https://miro.medium.com/max/1800/1*6ahbWjp_g9hqhaTDSJOL1Q.png" data-transition="convex"  -->
# Referências 📚
<!-- .element: style="margin-bottom:50px; font-size: 50px; color:2B2625; font-family: Marker Felt;" -->

* [O que é Vue.js?](https://www.w3schools.com/whatis/whatis_vue.asp) - W3CSchool
<!-- .element: style="margin-bottom:40px; font-size: 25px; color:white; font-family: arial;" -->

* [Vue.js](https://vuejs.org) - The Progressive JavaScript Framework
<!-- .element: style="margin-bottom:40px; font-size: 25px; color:white; font-family: arial;" -->

<center>
<a href="https://rpmhub.dev" target="blanck"><img src="../../imgs/logo.png" alt="Rodrigo Prestes Machado" width="3%" height="3%" border=0 style="border:0; text-decoration:none; outline:none"></a><br/>
<a rel="license" href="http://creativecommons.org/licenses/by/4.0/">Creative Commons Atribuição 4.0 Internacional</a>
<!-- .element: style="margin-bottom:40px; font-size: 14px; color:white; font-family: arial;" -->