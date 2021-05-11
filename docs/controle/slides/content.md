# Estruturas de Controle

Pressione 'F' para tela cheia
<!-- .element: style="font-size: small;" -->

[versão em pdf](?print-pdf)
<!-- .element: style="font-size: small;" -->


<!-- .slide: data-background="#F1F1F1" data-transition="zoom" -->
## If, else e else if

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


<!-- .slide: data-background="#F1F1F1" data-transition="zoom" -->
## Switch

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


<!-- .slide: data-background="#F1F1F1" data-transition="zoom" -->
## While

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


<!-- .slide: data-background="#F1F1F1" data-transition="zoom" -->
## For

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


<!-- .slide: data-background="#F1F1F1" data-transition="zoom" -->
## For .. in

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


<!-- .slide: data-background="#F1F1F1" data-transition="zoom" -->
## [ES6](https://www.w3schools.com/js/js_es6.asp#mark_forof): For/Of

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


<!-- .slide: data-background="#F1F1F1" data-transition="zoom" -->
## Break

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


<!-- .slide: data-background="#F1F1F1" data-transition="zoom" -->
## Continue

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


# Referências

* Comunidade [Discord](https://discord.com/invite/C29cqvm): canal `#cpw2`

* MDN [JavaScript basics](https://developer.mozilla.org/en-US/docs/Learn/Getting_started_with_the_web/JavaScript_basics)

* Tutorial de [JavaScript](http://www.w3schools.com/js) do W3C

* MILETTO, Evandro Manara. [Desenvolvimento de software II: introdução ao desenvolvimento web com html, css, javascript e php](https://biblioteca.ifrs.edu.br/pergamum_ifrs/biblioteca_s/acesso_login.php?cod_acervo_acessibilidade=5020682&acesso=aHR0cHM6Ly9pbnRlZ3JhZGEubWluaGFiaWJsaW90ZWNhLmNvbS5ici9ib29rcy85Nzg4NTgyNjAxOTY5&label=acesso%20restrito). Porto Alegre Bookman 2014 1 recurso online ISBN 9788582601969.

<center>
<a href="https://github.com/rodrigoprestesmachado" target="blanck"><img src="../../imgs/logo.png" alt="Rodrigo Prestes Machado" width="3%" height="3%" border=0 style="border:0; text-decoration:none; outline:none"></a><br/>
<a rel="license" href="http://creativecommons.org/licenses/by/4.0/">Creative Commons Atribuição 4.0 Internacional</a>