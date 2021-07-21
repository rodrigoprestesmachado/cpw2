<!-- .slide:  data-background-opacity="0.1" data-background-image="https://miro.medium.com/max/1800/1*6ahbWjp_g9hqhaTDSJOL1Q.png" 
data-transition="convex"  -->
# Hello worlds em Javascript
<!-- .element: style="margin-bottom:100px; font-size: 50px; color:white; font-family: Marker Felt;" -->

Pressione 'F' para tela cheia
<!-- .element: style="font-size: small; color:white;" -->

[versão em pdf](?print-pdf)
<!-- .element: style="font-size: small;" -->


<!-- .slide: data-transition="convex" -->
## Hello world

* JS dentro da *tag body*
<!-- .element: style="margin-bottom:50px; font-size: 24px;" -->

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


<!-- .slide: data-transition="convex" -->
## Hello world

* Função JS dentro da *tag* *head*
<!-- .element: style="margin-bottom:50px; font-size: 24px;" -->

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


<!-- .slide: data-transition="convex" -->
## Hello world

* Função JS dentro das *tags* *head e body*
<!-- .element: style="margin-bottom:50px; font-size: 24px;" -->

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


<!-- .slide: data-transition="convex" -->
## Hello world

* Arquivo JS externo
<!-- .element: style="margin-bottom:50px; font-size: 24px;" -->

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

* arquivo.js

```JavaScript
function hello(){
    alert("Function: Hello World");
}
```


<!-- .slide: data-transition="convex" -->
## Hello World

<iframe width="100%" height="300" src="//jsfiddle.net/prestesmachado/b9ygzkqo/embedded/js,html,result/dark/" allowfullscreen="allowfullscreen" allowpaymentrequest frameborder="0"></iframe>


# Referências

* Comunidade [Discord](https://discord.com/invite/C29cqvm): canal `#cpw2`
<!-- .element: style="margin-bottom:50px; font-size: 24px;" -->

* MDN [JavaScript basics](https://developer.mozilla.org/en-US/docs/Learn/Getting_started_with_the_web/JavaScript_basics)
<!-- .element: style="margin-bottom:50px; font-size: 24px;" -->

* Tutorial de [JavaScript](http://www.w3schools.com/js) do W3C
<!-- .element: style="margin-bottom:50px; font-size: 24px;" -->

* MILETTO, Evandro Manara. [Desenvolvimento de software II: introdução ao desenvolvimento web com html, css, javascript e php](https://biblioteca.ifrs.edu.br/pergamum_ifrs/biblioteca_s/acesso_login.php?cod_acervo_acessibilidade=5020682&acesso=aHR0cHM6Ly9pbnRlZ3JhZGEubWluaGFiaWJsaW90ZWNhLmNvbS5ici9ib29rcy85Nzg4NTgyNjAxOTY5&label=acesso%20restrito). Porto Alegre Bookman 2014 1 recurso online ISBN 9788582601969.
<!-- .element: style="margin-bottom:100px; font-size: 24px;" -->

<center>
<a href="https://github.com/rodrigoprestesmachado" target="blanck"><img src="../../imgs/logo.png" alt="Rodrigo Prestes Machado" width="4%" height="4%" border=0 style="border:0; text-decoration:none; outline:none"></a><br/>
<a rel="license" href="http://creativecommons.org/licenses/by/4.0/">Creative Commons Atribuição 4.0 Internacional</a>
</center>