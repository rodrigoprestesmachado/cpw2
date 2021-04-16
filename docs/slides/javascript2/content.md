# JavaScript - 2

<img src="https://upload.wikimedia.org/wikipedia/commons/9/99/Unofficial_JavaScript_logo_2.svg" width="20%" height="20%">

rodrigo.prestes@poa.ifrs.edu.br
<!-- .element: style="margin-bottom:150px;" -->

Tela cheia? pressione a tecla 'F'
<!-- .element: style="font-size: small;" -->

Versão em PDF? [aqui](?print-pdf)
<!-- .element: style="font-size: small;" -->


<!-- .slide: data-background="#EAFFB5" data-transition="concave" -->
## Índice

* Estruturas de Controle
<!-- .element: style="margin-bottom:50px; font-size: 24px;" -->
* Eventos
<!-- .element: style="margin-bottom:50px; font-size: 24px;" -->
* Funções
<!-- .element: style="margin-bottom:50px; font-size: 24px;" -->
* Referências
<!-- .element: style="margin-bottom:50px; font-size: 24px;" -->



## Estruturas de Controle


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



## Eventos


<!-- .slide: data-background="#F1F1F1" data-transition="zoom" -->
## O que são eventos?

* Os eventos são são ações que acontecem nos elementos de uma página
<!-- .element: style="margin-bottom:50px; font-size: 24px;" -->
* Quando utilizados JS em uma página podemos "reagir/tratar" a esses eventos
<!-- .element: style="margin-bottom:50px; font-size: 24px;" -->
* Existem muitos tipos de [eventos do HTML](https://www.w3schools.com/tags/ref_eventattributes.asp)
<!-- .element: style="margin-bottom:50px; font-size: 24px;" -->


<!-- .slide: data-background="#F1F1F1" data-transition="zoom" -->
## Eventos mais comuns

| Evento      | Descrição                                                   |
| ----------- | ----------------------------------------------------------- |
| onchange    | Um elemento HTML foi alterado                               |
| onclick     | O usuário clicou num elemento do HTML                       |
| onmouseover | O usuário passou com o _mouse_ por cima de um elemento HTML |
| onmouseout  | O usuário moveu o mouse para fora de um elemento HTML       |
| onkeydown   | Uma tecla foi pressionada                                   |
| onload      | O navegador terminou de carregar uma página                 |


<!-- .slide: data-background="#F1F1F1" data-transition="zoom" -->
## Exemplo

<iframe width="100%" height="300" src="//jsfiddle.net/prestesmachado/wzL73kjc/19/embedded/js,html,result/" allowfullscreen="allowfullscreen" allowpaymentrequest frameborder="0"></iframe>


<!-- .slide: data-background="#F1F1F1" data-transition="zoom" -->
## Exemplo orientado a objetos

<iframe width="100%" height="300" src="//jsfiddle.net/prestesmachado/ofqye9an/13/embedded/js,html,result/" allowfullscreen="allowfullscreen" allowpaymentrequest frameborder="0"></iframe>


<!-- .slide: data-background="#F1F1F1" data-transition="zoom" -->
## Alguns de Eventos

* onLoad e onUnload
  * São eventos que ocorrem geralmente quando um usuário entra ou sai de uma página

* onFocus, onBlur and onChange
  * São eventos associados com o tratamento de formulários Web

  * **Nota:** onBlur é um evento que ocorre quando o usuário retira o foco (cursor) de um formulário 

* Exemplo, validando um e-mail:

```html
<input type="text" size="30" id="email" onchange="checkEmail()">
```


<!-- .slide: data-background="#F1F1F1" data-transition="zoom" -->
## Alguns de Eventos

* onSubmit
  * Evento utilizado para validar todos os dados de um formulário antes do envio para o servidor

  * No exemplo, abaixo a função checkForm será chamada quando um usuário pressionar um botão de envio

  * A função checkForm retorna true ou false. O valor true é retornado se os campos foram validados corretamente

```html
<form method="post"
      action="pagina.php"
      onsubmit="return checkForm()">

```


<!-- .slide: data-background="#F1F1F1" data-transition="zoom" -->
## Alguns de Eventos

* onMouseOver e onMouseOut
  * Eventos associados com o posicionamento do mouse

* Exemplo:

```html
<a href="http://www.w3schools.com"
   onmouseover="alert('onMouseOver');return false">

    <img src="w3s.gif" alt="W3Schools" />

</a>
```



## Funções


<!-- .slide: data-background="#F1F1F1" -->
## Funções

* Uma função pode conter o código que será executado por um evento ou chamada de função

* Funções podem ser definidas nas tags `<head>` e `<body>`

* Entretanto, coloque as funções na tag `<head>` para assegurar que a função seja carregada pelo navegador antes de ser executada


<!-- .slide: data-background="#F1F1F1" -->
## Funções

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


<!-- .slide: data-background="#F1F1F1" -->
## Escopo de variáveis

* Se você declarar uma variável dentro de uma função, implica que a variável poderá ser acessada apenas dentro da função
<!-- .element: style="margin-bottom:50px; font-size: 24px;" -->
* Quando o fluxo de execução do código sai da função a variável é destruída
<!-- .element: style="margin-bottom:50px; font-size: 24px;" -->
* Este tipo de variáveis são chamadas de locais
<!-- .element: style="margin-bottom:50px; font-size: 24px;" -->
* Você pode ter variáveis locais com o mesmo nome em diferentes funções
<!-- .element: style="margin-bottom:50px; font-size: 24px;" -->


<!-- .slide: data-background="#F1F1F1" -->
## Escopo de variáveis

* Se você declarar uma variável fora de uma função, implica que todas as funções na sua página terão acesso
<!-- .element: style="margin-bottom:50px; font-size: 24px;" -->
* Este tipo de variável inicia quando são declaradas e terminam quando a página é fechada
<!-- .element: style="margin-bottom:50px; font-size: 24px;" -->
* Este tipo de variável é chamada de global
<!-- .element: style="margin-bottom:50px; font-size: 24px;" -->


<!-- .slide: data-background="#F1F1F1" -->
## Escopo de variáveis: exemplo

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



<!-- .slide: data-background="#F1F1F1" -->
## Referências

* Tutorial de [JavaScript](http://www.w3schools.com/js) do W3C
<!-- .element: style="margin-bottom:50px; font-size: 24px;" -->

* MILETTO, Evandro Manara. [Desenvolvimento de software II: introdução ao desenvolvimento web com html, css, javascript e php](https://biblioteca.ifrs.edu.br/pergamum_ifrs/biblioteca_s/acesso_login.php?cod_acervo_acessibilidade=5020682&acesso=aHR0cHM6Ly9pbnRlZ3JhZGEubWluaGFiaWJsaW90ZWNhLmNvbS5ici9ib29rcy85Nzg4NTgyNjAxOTY5&label=acesso%20restrito). Porto Alegre Bookman 2014 1 recurso online ISBN 9788582601969.
<!-- .element: style="margin-bottom:120px; font-size: 24px;" -->

<a rel="license" href="http://creativecommons.org/licenses/by/4.0/"><img alt="Licença Creative Commons" style="border-width:0" src="https://i.creativecommons.org/l/by/4.0/80x15.png" /></a><br />Este obra está licenciado com uma Licença <a rel="license" href="http://creativecommons.org/licenses/by/4.0/">Creative Commons Atribuição 4.0 Internacional</a>.
<center>
<a href="https://github.com/rodrigoprestesmachado" target="blanck"><img src="imgs/logo.png" width="5%" height="5%" alt="Rodrigo Prestes Machado"></a>
</center>