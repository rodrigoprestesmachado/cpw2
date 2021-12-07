<!-- .slide:  data-background-opacity="0.1" data-background-image="https://miro.medium.com/max/1800/1*6ahbWjp_g9hqhaTDSJOL1Q.png" data-transition="convex"  -->
# Web Storage
<!-- .element: style="margin-bottom:100px; font-size: 50px; color:white; font-family: Marker Felt;" -->

Pressione 'F' para tela cheia
<!-- .element: style="font-size: small; color:white;" -->

[versão em pdf](?print-pdf)
<!-- .element: style="font-size: small;" -->


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
# Introdução 🤓
<!-- .element: style="margin-bottom:50px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

* A API Web Storage fornece mecanismos pelos quais os navegadores podem armazenar pares de chaves/valores
<!-- .element: style="margin-bottom:50px; font-size: 23px; font-family: arial; color:#F5F5F5" -->

* As chaves e valores são sempre strings
<!-- .element: style="margin-bottom:50px; font-size: 23px; font-family: arial; color:#F5F5F5" -->

*  Você pode acessar esses valores como você faria com um objeto ou usando os métodos `Storage.getItem()` e `Storage.setItem()`
<!-- .element: style="margin-bottom:50px; font-size: 23px; font-family: arial; color:#F5F5F5" -->


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
# sessionStorage e localStorage 🗄️
<!-- .element: style="margin-bottom:50px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

* Os dois mecanismos presentes na Web Storage são os seguintes:
<!-- .element: style="margin-bottom:50px; font-size: 23px; font-family: arial; color:#F5F5F5" -->

  * O **sessionStorage** mantém uma área de armazenamento separada para cada origem diferente. Cada uma dessas áreas fica disponível durante a sessão da página (ou seja, enquanto a aba do navegador estiver aberta, incluindo recarregamentos e restaurações de páginas).
  <!-- .element: style="margin-bottom:50px; font-size: 23px; font-family: arial; color:#F5F5F5" -->

  * O **localStorage** faz a mesma coisa, mas os dados armazenados aqui continuam existindo mesmo depois do navegador ser fechado e reaberto.
  <!-- .element: style="margin-bottom:50px; font-size: 23px; font-family: arial; color:#F5F5F5" -->


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
# sessionStorage e localStorage 🗄️
<!-- .element: style="margin-bottom:50px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

* Esses mecanismos estão disponíveis através das propriedades `Window.sessionStorage` e `Window.localStorage`
<!-- .element: style="margin-bottom:50px; font-size: 23px; font-family: arial; color:#F5F5F5" -->

* Ao chamar um `sessionStorage` pela primeira vez em um documento retornará um objeto [Storage](https://developer.mozilla.org/pt-BR/docs/Web/API/Storage);
<!-- .element: style="margin-bottom:50px; font-size: 23px; font-family: arial; color:#F5F5F5" -->

* Ao chamar `localStorage` em um documento retornará um outro objeto [Storage](https://developer.mozilla.org/pt-BR/docs/Web/API/Storage). Ambos podem ser manipulados da mesma maneira, mas, de forma isolada.
<!-- .element: style="margin-bottom:50px; font-size: 23px; font-family: arial; color:#F5F5F5" -->


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
# Exemplo 📂
<!-- .element: style="margin-bottom:50px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

```html
<body onload="load()">
  <p id="text">Web storage</p>
  <label for="color">Cor do fundo: </label>
  <input type="color" id="color" onblur="changeColor()" />

  <script>
    /**
     * Troca a cor do fundo da página
     */
    function changeColor() {
      let inputColor = document.getElementById("color");
      document.body.style.backgroundColor = inputColor.value;

      // Armazena no localStorage
      localStorage.setItem("color", inputColor.value);
    }

    /**
     * Inicializa o localStorage
     */
    function load() {
      document.body.style.backgroundColor = localStorage.getItem("color");
    }
  </script>
</body>
```
<!-- .element: style="margin-bottom:50px; font-size: 16px; font-family: arial; color:black; background-color: #E6E7E5;" -->

Você pode observar o exemplo [aqui](local-storage.html)
<!-- .element: style="margin-bottom:50px; font-size: 14px; font-family: arial; color:#F5F5F5" -->


<!-- .slide:  data-background-opacity="0.1" data-background-image="https://miro.medium.com/max/1800/1*6ahbWjp_g9hqhaTDSJOL1Q.png" data-transition="convex"  -->
# Referências 📚
<!-- .element: style="margin-bottom:50px; font-size: 50px; color:2B2625; font-family: Marker Felt;" -->

[Usando a API Web Storage](https://developer.mozilla.org/pt-BR/docs/Web/API/Web_Storage_API/Using_the_Web_Storage_API) no MDN Web Docs
<!-- .element: style="margin-bottom:50px; font-size: 23px; font-family: arial; color:#F5F5F5" -->

<center>
<a href="https://rpmhub.dev" target="blanck"><img src="../../imgs/logo.png" alt="Rodrigo Prestes Machado" width="3%" height="3%" border=0 style="border:0; text-decoration:none; outline:none"></a><br/>
<a rel="license" href="http://creativecommons.org/licenses/by/4.0/">Creative Commons Atribuição 4.0 Internacional</a>
<!-- .element: style="margin-bottom:40px; font-size: 14px; color:white; font-family: arial;" -->