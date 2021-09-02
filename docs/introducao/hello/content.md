<!-- .slide:  data-background-opacity="0.1" data-background-image="https://miro.medium.com/max/1800/1*6ahbWjp_g9hqhaTDSJOL1Q.png" 
data-transition="convex"  -->
# JS Hello world
<!-- .element: style="margin-bottom:100px; font-size: 50px; color:white; font-family: Marker Felt;" -->

Pressione 'F' para tela cheia
<!-- .element: style="font-size: small; color:white;" -->

[versão em pdf](?print-pdf)
<!-- .element: style="font-size: small;" -->


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
## JS dentro da tag body 🤓
<!-- .element: style="margin-bottom:50px; font-size: 40px; font-family: Marker Felt;" -->

```html
<html>
    <head>
    </head>
    <body>
        <script type="text/JavaScript">
            <!--
                document.write("Hello World");
	        -->
        </script>
    </body>
</html>
```
<!-- .element: style="margin-bottom:50px; font-size: 18px; font-family: arial; color:black; background-color: #F2FAF3;" -->


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
## Função JS dentro da tag head
<!-- .element: style="margin-bottom:50px; font-size: 40px; font-family: Marker Felt;" -->

```html
<html>
    <head>
        <script type="text/JavaScript">
            function message(){
                alert("Function: Hello World");
            }
        </script>
    </head>
    <body onload="message()">
    </body>
</html>
```
<!-- .element: style="margin-bottom:50px; font-size: 18px; font-family: arial; color:black; background-color: #F2FAF3;" -->


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
## Função JS dentro das tags head e body 🔋
<!-- .element: style="margin-bottom:50px; font-size: 40px; font-family: Marker Felt;" -->

```html
<html>
    <head>
        <script type="text/JavaScript">
         function hello(){
             alert("Function: Hello World");
         }
        </script>
    </head>

	<body onload="hello()">
    	<script type="text/JavaScript">
         	<!--
         	document.write("Hello World");
         	-->
    	</script>
	</body>
</html>
```
<!-- .element: style="margin-bottom:50px; font-size: 18px; font-family: arial; color:black; background-color: #F2FAF3;" -->


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
## Arquivo JS externo 🚀
<!-- .element: style="margin-bottom:50px; font-size: 40px; font-family: Marker Felt;" -->

```html
<html>
    <head>
        <script type="text/JavaScript" src="arquivo.js">
		</script>
    </head>

    <body>
    </body>
</html>
```
<!-- .element: style="margin-bottom:50px; font-size: 18px; font-family: arial; color:black; background-color: #F2FAF3;" -->

arquivo.js
<!-- .element: style="margin-bottom:40px; font-size: 30px; color:white; font-family: arial;" -->

```JavaScript
function hello(){
    alert("Function: Hello World");
}
```
<!-- .element: style="margin-bottom:50px; font-size: 18px; font-family: arial; color:black; background-color: #F2FAF3;" -->


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
## Hello World no JSFiddle
<!-- .element: style="margin-bottom:50px; font-size: 40px; font-family: Marker Felt;" -->

<iframe width="100%" height="300" src="//jsfiddle.net/prestesmachado/b9ygzkqo/1/embedded/" allowfullscreen="allowfullscreen" allowpaymentrequest frameborder="0"></iframe>


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
# Referências 📚
<!-- .element: style="margin-bottom:50px; font-size: 40px; font-family: Marker Felt;" -->

* MDN [JavaScript basics](https://developer.mozilla.org/en-US/docs/Learn/Getting_started_with_the_web/JavaScript_basics)
<!-- .element: style="margin-bottom:40px; font-size: 25px; color:white; font-family: arial;" -->

* Tutorial de [JavaScript](http://www.w3schools.com/js) do W3C
<!-- .element: style="margin-bottom:40px; font-size: 25px; color:white; font-family: arial;" -->

* MILETTO, Evandro Manara. [Desenvolvimento de software II: introdução ao desenvolvimento web com html, css, javascript e php](https://biblioteca.ifrs.edu.br/pergamum_ifrs/biblioteca_s/acesso_login.php?cod_acervo_acessibilidade=5020682&acesso=aHR0cHM6Ly9pbnRlZ3JhZGEubWluaGFiaWJsaW90ZWNhLmNvbS5ici9ib29rcy85Nzg4NTgyNjAxOTY5&label=acesso%20restrito). Porto Alegre Bookman 2014 1 recurso online ISBN 9788582601969.
<!-- .element: style="margin-bottom:40px; font-size: 25px; color:white; font-family: arial;" -->

<center>
<a href="https://github.com/rodrigoprestesmachado" target="blanck"><img src="../../imgs/logo.png" alt="Rodrigo Prestes Machado" width="4%" height="4%" border=0 style="border:0; text-decoration:none; outline:none"></a><br/>
<a rel="license" href="http://creativecommons.org/licenses/by/4.0/">Creative Commons Atribuição 4.0 Internacional</a>
</center>