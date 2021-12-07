<!-- .slide:  data-background-opacity="0.1" data-background-image="https://miro.medium.com/max/1800/1*6ahbWjp_g9hqhaTDSJOL1Q.png" data-transition="convex"  -->
# Funções
<!-- .element: style="margin-bottom:100px; font-size: 50px; color:white; font-family: Marker Felt;" -->

Pressione 'F' para tela cheia
<!-- .element: style="font-size: small; color:white;" -->

[versão em pdf](?print-pdf)
<!-- .element: style="font-size: small;" -->


<!-- .slide: data-background="#4AA791" data-transition="zoom" -->
## Funções 🧮
<!-- .element: style="margin-bottom:50px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

* Uma função pode conter o código que será executado por um evento ou chamada de função
<!-- .element: style="margin-bottom:50px; font-size: 25px; font-family: arial; color:#F5F5F5" -->

* Funções podem ser definidas nas tags `<head>` e `<body>`
<!-- .element: style="margin-bottom:50px; font-size: 25px; font-family: arial; color:#F5F5F5" -->

* Entretanto, coloque as funções na tag `<head>` para assegurar que a função seja carregada pelo navegador antes de ser executada
<!-- .element: style="margin-bottom:50px; font-size: 25px; font-family: arial; color:#F5F5F5" -->


<!-- .slide: data-background="#4AA791" data-transition="zoom" -->
## Funções 🧮
<!-- .element: style="margin-bottom:50px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

```html
<html>
<head>
    <script type="text/javascript">
        function product(a,b) {
            return a*b;
        }
    </script>
</head>

<body>

    <script type="text/javascript">
        document.write(product(4,3));
    </script>

</body>
</html>
```
<!-- .element: style="margin-bottom:50px; font-size: 16px; font-family: arial; color:black; background-color: #F2FAF3;" -->


<!-- .slide: data-background="#4AA791" data-transition="zoom" -->
## Escopo de variáveis 🗳️
<!-- .element: style="margin-bottom:50px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

* Se você declarar uma variável dentro de uma função, implica que a variável poderá ser acessada apenas dentro da função
<!-- .element: style="margin-bottom:50px; font-size: 25px; font-family: arial; color:#F5F5F5" -->

* Quando o fluxo de execução do código sai da função a variável é destruída
<!-- .element: style="margin-bottom:50px; font-size: 25px; font-family: arial; color:#F5F5F5" -->

* Este tipo de variáveis são chamadas de locais
<!-- .element: style="margin-bottom:50px; font-size: 25px; font-family: arial; color:#F5F5F5" -->

* Você pode ter variáveis locais com o mesmo nome em diferentes funções
<!-- .element: style="margin-bottom:50px; font-size: 25px; font-family: arial; color:#F5F5F5" -->


<!-- .slide: data-background="#4AA791" data-transition="zoom" -->
## Escopo de variáveis 🗳️
<!-- .element: style="margin-bottom:50px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

* Se você declarar uma variável fora de uma função, implica que todas as funções na sua página terão acesso
<!-- .element: style="margin-bottom:50px; font-size: 25px; font-family: arial; color:#F5F5F5" -->

* Este tipo de variável inicia quando são declaradas e terminam quando a página é fechada
<!-- .element: style="margin-bottom:50px; font-size: 25px; font-family: arial; color:#F5F5F5" -->

* Este tipo de variável é chamada de global
<!-- .element: style="margin-bottom:50px; font-size: 25px; font-family: arial; color:#F5F5F5" -->


<!-- .slide: data-background="#4AA791" data-transition="zoom" -->
## Escopo de variáveis: exemplo
<!-- .element: style="margin-bottom:50px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

```js
<script type="text/javascript">
    var a = 0; // global
    function x(){
        var b = 5; // local
        a = a + 1;
        alert(a);
        y();
    }
    function y(){
        a = a + 1;
        alert (a);
        b = b + 1; // Erro
        alert (b);
    }
</script>
```
<!-- .element: style="margin-bottom:50px; font-size: 16px; font-family: arial; color:black; background-color: #F2FAF3;" -->


<!-- .slide:  data-background-opacity="0.1" data-background-image="https://miro.medium.com/max/1800/1*6ahbWjp_g9hqhaTDSJOL1Q.png" data-transition="convex"  -->
# Referências 📚
<!-- .element: style="margin-bottom:50px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

* MDN [JavaScript basics](https://developer.mozilla.org/en-US/docs/Learn/Getting_started_with_the_web/JavaScript_basics)
<!-- .element: style="margin-bottom:50px; font-size: 25px; font-family: arial; color:#F5F5F5" -->

* Tutorial de [JavaScript](http://www.w3schools.com/js) do W3C
<!-- .element: style="margin-bottom:50px; font-size: 25px; font-family: arial; color:#F5F5F5" -->

* MILETTO, Evandro Manara. [Desenvolvimento de software II: introdução ao desenvolvimento web com html, css, javascript e php](https://biblioteca.ifrs.edu.br/pergamum_ifrs/biblioteca_s/acesso_login.php?cod_acervo_acessibilidade=5020682&acesso=aHR0cHM6Ly9pbnRlZ3JhZGEubWluaGFiaWJsaW90ZWNhLmNvbS5ici9ib29rcy85Nzg4NTgyNjAxOTY5&label=acesso%20restrito). Porto Alegre Bookman 2014 1 recurso online ISBN 9788582601969.
<!-- .element: style="margin-bottom:50px; font-size: 25px; font-family: arial; color:#F5F5F5" -->

<center>
<a href="https://github.com/rodrigoprestesmachado" target="blanck"><img src="../../imgs/logo.png" alt="Rodrigo Prestes Machado" width="3%" height="3%" border=0 style="border:0; text-decoration:none; outline:none"></a><br/>
<a rel="license" href="http://creativecommons.org/licenses/by/4.0/">Creative Commons Atribuição 4.0 Internacional</a>