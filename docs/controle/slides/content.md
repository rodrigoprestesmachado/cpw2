<!-- .slide:  data-background-opacity="0.1" data-background-image="https://miro.medium.com/max/1800/1*6ahbWjp_g9hqhaTDSJOL1Q.png" 
data-transition="convex"  -->
# Estruturas de Controle
<!-- .element: style="margin-bottom:100px; font-size: 60px; color:F5F5F5; font-family: Marker Felt;" -->

Pressione 'F' para tela cheia
<!-- .element: style="font-size: small;" -->

[versão em pdf](?print-pdf)
<!-- .element: style="font-size: small;" -->


<!-- .slide: data-background="#4AA791" data-transition="zoom" -->
## If, else e else if
<!-- .element: style="margin-bottom:40px; font-size: 40px; font-family: Marker Felt; color:#F5F5F5" -->

```html
<html>
<body>
    <script type="text/javascript”>
        var d = new Date()
        var time = d.getHours()

        if (time<10) {
            document.write("Good morning>");
        }
        else if (time>10 && time<16) {
            document.write("Good day");
        }
        else {
            document.write("Hello World!");
        }
    </script>
</body>
</html>
```
<!-- .element: style="margin-bottom:50px; font-size: 16px; font-family: arial; color:black; background-color: #F2FAF3;" -->


<!-- .slide: data-background="#4AA791" data-transition="zoom" -->
## Switch
<!-- .element: style="margin-bottom:40px; font-size: 40px; font-family: Marker Felt; color:#F5F5F5" -->

```html
<body>
<html>
<script type="text/javascript”>
    var d=new Date();
    theDay=d.getDay();

    switch (theDay) {
        case 5:
             document.write("Sexta");
             break;
        case 6:
             document.write("Sabado");
             break;
         case 0:
             document.write("Domingo");
             break;
         default:
             document.write("Outro dia da semana");
    }
</script>
</body>
</html>
```
<!-- .element: style="margin-bottom:50px; font-size: 16px; font-family: arial; color:black; background-color: #F2FAF3;" -->


<!-- .slide: data-background="#4AA791" data-transition="zoom" -->
## While
<!-- .element: style="margin-bottom:40px; font-size: 40px; font-family: Marker Felt; color:#F5F5F5" -->

```html
<html>
<body>
     <script type="text/javascript">
         var i=0;
         while (i<=5) {
             document.write("O número é: " + i);
             document.write("<br />");
             i++;
          }
      </script>
</body>
</html>
```
<!-- .element: style="margin-bottom:50px; font-size: 16px; font-family: arial; color:black; background-color: #F2FAF3;" -->


<!-- .slide: data-background="#4AA791" data-transition="zoom" -->
## For
<!-- .element: style="margin-bottom:40px; font-size: 40px; font-family: Marker Felt; color:#F5F5F5" -->

```html
<html>
<body>
    <script type="text/javascript">
        var i=0;
        for (i=0; i<=5; i++) {
            document.write("O número é:" + i);
            document.write("<br />");
        }
     </script>
</body>
</html>
```
<!-- .element: style="margin-bottom:50px; font-size: 16px; font-family: arial; color:black; background-color: #F2FAF3;" -->


<!-- .slide: data-background="#4AA791" data-transition="zoom" -->
## For .. in
<!-- .element: style="margin-bottom:40px; font-size: 40px; font-family: Marker Felt; color:#F5F5F5" -->

```html
<html>
<body>
    <script type="text/javascript">
        var x;
        var mycars = new Array();

        mycars[0] = "Mercedes";
        mycars[1] = "Volvo";
        mycars[2] = "BMW";

        for (x in mycars) {
            document.write(mycars[x] + "<br />");
        }
    </script>
</body>
</html>
```
<!-- .element: style="margin-bottom:50px; font-size: 16px; font-family: arial; color:black; background-color: #F2FAF3;" -->


<!-- .slide: data-background="#4AA791" data-transition="zoom" -->
## [ES6](https://www.w3schools.com/js/js_es6.asp#mark_forof): For/Of
<!-- .element: style="margin-bottom:40px; font-size: 40px; font-family: Marker Felt; color:#F5F5F5" -->

```html
</body>
</html>
    <script>
        let cars = ["BMW", "Volvo", "Mini"];
        let text = "";
        for (let x of cars) {
        text += x + "<br>";
        }
        document.write(text);
    </script>
</body>
</html>
```
<!-- .element: style="margin-bottom:50px; font-size: 16px; font-family: arial; color:black; background-color: #F2FAF3;" -->


<!-- .slide: data-background="#4AA791" data-transition="zoom" -->
## Break
<!-- .element: style="margin-bottom:40px; font-size: 40px; font-family: Marker Felt; color:#F5F5F5" -->

```html
<html>
<body>
    <script type="text/javascript">
        var i=0;
        for (i=0;i<=10;i++) {
            if (i==3) {
                break;
            }
           document.write("O numero é:" + i);
           document.write("<br />");
        }
    </script>
</body>
</html>
```
<!-- .element: style="margin-bottom:50px; font-size: 16px; font-family: arial; color:black; background-color: #F2FAF3;" -->


<!-- .slide: data-background="#4AA791" data-transition="zoom" -->
## Continue
<!-- .element: style="margin-bottom:40px; font-size: 40px; font-family: Marker Felt; color:#F5F5F5" -->

```html
<html>
<body>
    <script type="text/javascript">
        var i=0
        for (i=0;i<=10;i++) {
            if (i==3) {
                continue;
            }
            document.write("O número é: " + i);
            document.write("<br />");
         }
    </script>
</body>
</html>
```
<!-- .element: style="margin-bottom:50px; font-size: 16px; font-family: arial; color:black; background-color: #F2FAF3;" -->


<!-- .slide: data-background="#4AA791" data-transition="zoom" -->
# Referências 📚
<!-- .element: style="margin-bottom:50px; font-size: 45px; color:2B2625; font-family: Marker Felt; color:#F5F5F5" -->

* MDN [JavaScript basics](https://developer.mozilla.org/en-US/docs/Learn/Getting_started_with_the_web/JavaScript_basics)
<!-- .element: style="margin-bottom:40px; font-size: 20px; color:white; font-family: arial;" -->

* Tutorial de [JavaScript](http://www.w3schools.com/js) do W3C
<!-- .element: style="margin-bottom:40px; font-size: 20px; color:white; font-family: arial;" -->

* MILETTO, Evandro Manara. [Desenvolvimento de software II: introdução ao desenvolvimento web com html, css, javascript e php](https://biblioteca.ifrs.edu.br/pergamum_ifrs/biblioteca_s/acesso_login.php?cod_acervo_acessibilidade=5020682&acesso=aHR0cHM6Ly9pbnRlZ3JhZGEubWluaGFiaWJsaW90ZWNhLmNvbS5ici9ib29rcy85Nzg4NTgyNjAxOTY5&label=acesso%20restrito). Porto Alegre Bookman 2014 1 recurso online ISBN 9788582601969.
<!-- .element: style="margin-bottom:40px; font-size: 20px; color:white; font-family: arial;" -->

<center>
<a href="https://github.com/rodrigoprestesmachado" target="blanck"><img src="../../imgs/logo.png" alt="Rodrigo Prestes Machado" width="3%" height="3%" border=0 style="border:0; text-decoration:none; outline:none"></a><br/>
<a rel="license" href="http://creativecommons.org/licenses/by/4.0/">Creative Commons Atribuição 4.0 Internacional</a>