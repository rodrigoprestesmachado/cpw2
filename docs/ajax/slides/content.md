<!-- .slide:  data-background-opacity="0.1" data-background-image="https://miro.medium.com/max/1800/1*6ahbWjp_g9hqhaTDSJOL1Q.png" 
data-transition="convex"  -->
# Asynchronous Javascript and XML (AJAX)
<!-- .element: style="margin-bottom:100px; font-size: 50px; color:white; font-family: Marker Felt;" -->

Pressione 'F' para tela cheia
<!-- .element: style="font-size: small; color:white;" -->

[versão em pdf](?print-pdf)
<!-- .element: style="font-size: small;" -->


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
# Introdução 🤓
<!-- .element: style="margin-bottom:50px; font-size: 40px; font-family: Marker Felt; color:#2B2625" -->

* AJAX (Asynchronous JavaScript and XML) é um padrão de desenvolvimento na Web que permite que os clientes e servidores troquem dados de maneira assíncrona
<!-- .element: style="margin-bottom:50px; font-size: 23px; font-family: arial; color:#F5F5F5" -->

* Trata-se de uma maneira de usar os padrões existentes na Web para criar aplicações
<!-- .element: style="margin-bottom:50px; font-size: 23px; font-family: arial; color:#F5F5F5" -->

* Com AJAX, é possível atualizar partes de uma página sem ter que recarregar a página inteira
<!-- .element: style="margin-bottom:50px; font-size: 23px; font-family: arial; color:#F5F5F5" -->


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
# Como o AJAX Funciona? &#129300;
<!-- .element: style="margin-bottom:50px; font-size: 40px; font-family: Marker Felt;" -->

![imagem](https://www.w3schools.com/js/pic_ajax.gif) <!-- .element height="60%" width="60%" -->

Fonte: [w3schools](https://www.w3schools.com/js/js_ajax_intro.asp)
<!-- .element: style="margin-bottom:50px; font-size: 12px; font-family: arial; color:#F5F5F5" -->


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
# Como o AJAX Funciona? &#129300;
<!-- .element: style="margin-bottom:50px; font-size: 40px; font-family: Marker Felt;" -->

* AJAX utiliza uma combinações de padrões de Internet, e usa uma combinação de:
<!-- .element: style="margin-bottom:50px; font-size: 23px; font-family: arial; color:#F5F5F5" -->

    * Objeto **XMLHttpRequest**: usado como formato de troca de dados de forma assíncrona com um servidor Web
    <!-- .element: style="margin-bottom:50px; font-size: 23px; font-family: arial; color:#F5F5F5" -->

    * **XML/JSON**: utilizado como formato de transferência dos dados
    <!-- .element: style="margin-bottom:50px; font-size: 23px; font-family: arial; color:#F5F5F5" -->

    * **JavaScript/DOM**: permite exibir as informações
    <!-- .element: style="margin-bottom:50px; font-size: 23px; font-family: arial; color:#F5F5F5" -->

    * **CSS**: permite estilizar os dados
    <!-- .element: style="margin-bottom:50px; font-size: 23px; font-family: arial; color:#F5F5F5" -->


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
# XMLHttpRequest
<!-- .element: style="margin-bottom:50px; font-size: 40px; font-family: Marker Felt;" -->

* Um objeto da classe XMLHttpRequest é utilizado para trocar dados com um servidor Web
<!-- .element: style="margin-bottom:50px; font-size: 23px; font-family: arial; color:#F5F5F5" -->

* Este objeto permite que se você atualize partes de uma página web, sem precisar recarregar a página inteira
<!-- .element: style="margin-bottom:50px; font-size: 23px; font-family: arial; color:#F5F5F5" -->

* Todos os navegadores modernos possuem um objeto XMLHttpRequest
<!-- .element: style="margin-bottom:50px; font-size: 23px; font-family: arial; color:#F5F5F5" -->


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
# Criando um objeto XMLHttpRequest
<!-- .element: style="margin-bottom:50px; font-size: 40px; font-family: Marker Felt;" -->

```javascript
function loadPage() {
    var xmlhttp;
	if (window.XMLHttpRequest) {
	    xmlhttp = new XMLHttpRequest();
    }
    else {
        // código para o Internet Explorer antigos 🤮 😂😂
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    // O código continua aqui ...
}
```
<!-- .element: style="margin-bottom:50px; font-size: 16px; font-family: arial; color:black; background-color: #F2FAF3;" -->


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
# Enviando uma Requisição &#128640;
<!-- .element: style="margin-bottom:50px; font-size: 40px; font-family: Marker Felt;" -->

* Para enviar uma solicitação para um servidor, devemos utilizar os métodos open e _send_ do objeto XMLHttpRequest
<!-- .element: style="margin-bottom:50px; font-size: 23px; font-family: arial; color:#F5F5F5" -->

* Método Open:
    <!-- .element: style="margin-bottom:20px; font-size: 23px; font-family: arial; color:#F5F5F5" -->
    * Especifica o tipo de solicitação
    <!-- .element: style="margin-bottom:20px; font-size: 23px; font-family: arial; color:#F5F5F5" -->
    * Parâmetros: open (Método, URL, Async)
    <!-- .element: style="margin-bottom:30px; font-size: 23px; font-family: arial; color:#F5F5F5" -->
        * Método: GET ou POST
        <!-- .element: style="margin-bottom:20px; font-size: 23px; font-family: arial; color:#F5F5F5" -->
        * URL: localização de um arquivo no servidor
        <!-- .element: style="margin-bottom:20px; font-size: 23px; font-family: arial; color:#F5F5F5" -->
        * Async: true (assíncrono) ou falso (síncrono)
        <!-- .element: style="margin-bottom:20px; font-size: 23px; font-family: arial; color:#F5F5F5" -->


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
# Enviando uma Requisição &#128640;
<!-- .element: style="margin-bottom:50px; font-size: 40px; font-family: Marker Felt;" -->

* Método Send:
<!-- .element: style="margin-bottom:20px; font-size: 23px; font-family: arial; color:#F5F5F5" -->
    * Envia a requisição para o servidor
    <!-- .element: style="margin-bottom:20px; font-size: 23px; font-family: arial; color:#F5F5F5" -->
    * Parâmetros: send (string)
    <!-- .element: style="margin-bottom:20px; font-size: 23px; font-family: arial; color:#F5F5F5" -->
        * String: Utilizada para requisições por meio de POST
        <!-- .element: style="margin-bottom:50px; font-size: 23px; font-family: arial; color:#F5F5F5" -->

```javascript
xmlhttp.open("GET", "resposta.php", true);
xmlhttp.send();
```
<!-- .element: style="margin-bottom:50px; font-size: 18px; font-family: arial; color:black; background-color: #F2FAF3;" -->


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
# GET e POST &#128640;
<!-- .element: style="margin-bottom:50px; font-size: 40px; font-family: Marker Felt;" -->

Enviando dados para o servidor por GET:
<!-- .element: style="margin-bottom:20px; font-size: 23px; font-family: arial; color:#F5F5F5" -->

```javascript
xmlhttp.open("GET","resposta.php?nome=Rodrigo&idade=40",true);
xmlhttp.send();
```
<!-- .element: style="margin-bottom:50px; font-size: 18px; font-family: arial; color:black; background-color: #F2FAF3;" -->

Enviando dados para o servidor por POST:
<!-- .element: style="margin-bottom:20px; font-size: 23px; font-family: arial; color:#F5F5F5" -->

```javascript
xmlhttp.open("POST","ajax_test.asp",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("nome=Rodrigo&idade=40");
```
<!-- .element: style="margin-bottom:50px; font-size: 18px; font-family: arial; color:black; background-color: #F2FAF3;" -->


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
# Requisições Assíncronas
<!-- .element: style="margin-bottom:50px; font-size: 40px; font-family: Marker Felt;" -->

* Async = true
<!-- .element: style="margin-bottom:20px; font-size: 23px; font-family: arial; color:#F5F5F5" -->
    * Quando async for igual a _true_ devemos especificar uma função para executar quando a resposta estiver pronta, veja o exemplo:
    <!-- .element: style="margin-bottom:20px; font-size: 23px; font-family: arial; color:#F5F5F5" -->

```javascript
function loadPage(){
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.open("GET", "resposta.php", true);
   xmlhttp.send();

   xmlhttp.onreadystatechange = retorno;
}
    
function retorno(){
    alert("Hello!");
}
```
<!-- .element: style="margin-bottom:50px; font-size: 18px; font-family: arial; color:black; background-color: #F2FAF3;" -->


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
# Requisições Assíncronas
<!-- .element: style="margin-bottom:50px; font-size: 40px; font-family: Marker Felt;" -->

* Quando uma solicitação é enviada, queremos realizar algumas ações com base na resposta
<!-- .element: style="margin-bottom:20px; font-size: 23px; font-family: arial; color:#F5F5F5" -->

* Três importantes propriedades do objeto XMLHttpRequest:
<!-- .element: style="margin-bottom:20px; font-size: 23px; font-family: arial; color:#F5F5F5" -->

* onreadystatechange
<!-- .element: style="margin-bottom:20px; font-size: 23px; font-family: arial; color:#F5F5F5" -->
    * Armazena uma função (ou o nome de uma função) que será chamada automaticamente toda vez que a mudança da propriedade readyState
    <!-- .element: style="margin-bottom:20px; font-size: 23px; font-family: arial; color:#F5F5F5" -->


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
# Requisições Assíncronas
<!-- .element: style="margin-bottom:40px; font-size: 40px; font-family: Marker Felt;" -->

* readyState
<!-- .element: style="margin-bottom:20px; font-size: 23px; font-family: arial; color:#F5F5F5" -->
    * 0: requisição não inicializada
    <!-- .element: style="margin-bottom:20px; font-size: 23px; font-family: arial; color:#F5F5F5" -->
    * 1: estabeleceu conexão com o servidor
    <!-- .element: style="margin-bottom:20px; font-size: 23px; font-family: arial; color:#F5F5F5" -->
    * 2: pedido recebido
    <!-- .element: style="margin-bottom:20px; font-size: 23px; font-family: arial; color:#F5F5F5" -->
    * 3: o pedido de processamento
    <!-- .element: style="margin-bottom:20px; font-size: 23px; font-family: arial; color:#F5F5F5" -->
    * 4: pedido concluído e está pronta resposta
    <!-- .element: style="margin-bottom:20px; font-size: 23px; font-family: arial; color:#F5F5F5" -->

* status
<!-- .element: style="margin-bottom:20px; font-size: 23px; font-family: arial; color:#F5F5F5" -->
    * 200: OK!
    <!-- .element: style="margin-bottom:20px; font-size: 23px; font-family: arial; color:#F5F5F5" -->
    * 404: Página não encontrada
    <!-- .element: style="margin-bottom:20px; font-size: 23px; font-family: arial; color:#F5F5F5" -->


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
# Resposta do Servidor
<!-- .element: style="margin-bottom:40px; font-size: 40px; font-family: Marker Felt;" -->

* Para obter a resposta de um servidor, utilize a propriedade responseText ou responseXML do objeto XMLHttpRequest
<!-- .element: style="margin-bottom:20px; font-size: 23px; font-family: arial; color:#F5F5F5" -->

```javascript
document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
```
<!-- .element: style="margin-bottom:50px; font-size: 18px; font-family: arial; color:black; background-color: #F2FAF3;" -->


<!-- .slide: data-background="#4AA791" data-transition="convex"  -->
# Exemplo &#128170;
<!-- .element: style="margin-bottom:40px; font-size: 40px; font-family: Marker Felt;" -->

<center>
<iframe width="100%" height="300" src="//jsfiddle.net/prestesmachado/9tp7dxe0/34/embedded/js,html,result/dark/" allowfullscreen="allowfullscreen" allowpaymentrequest frameborder="0"></iframe>
</center>


<!-- .slide: data-background="#4AA791" data-transition="zoom" -->
# Referências 📚
<!-- .element: style="margin-bottom:50px; font-size: 50px; color:2B2625; font-family: Marker Felt;" -->

* [AJAX Introduction](https://www.w3schools.com/js/js_ajax_intro.asp) no W3C Schools
<!-- .element: style="margin-bottom:40px; font-size: 20px; color:white; font-family: arial;" -->

* MILETTO, Evandro Manara. [Desenvolvimento de software II: introdução ao desenvolvimento web com html, css, javascript e php](https://biblioteca.ifrs.edu.br/pergamum_ifrs/biblioteca_s/acesso_login.php?cod_acervo_acessibilidade=5020682&acesso=aHR0cHM6Ly9pbnRlZ3JhZGEubWluaGFiaWJsaW90ZWNhLmNvbS5ici9ib29rcy85Nzg4NTgyNjAxOTY5&label=acesso%20restrito). Porto Alegre Bookman 2014 1 recurso online ISBN 9788582601969.
<!-- .element: style="margin-bottom:40px; font-size: 20px; color:white; font-family: arial;" -->

<center>
<a href="https://rpmhub.dev" target="blanck"><img src="../../imgs/logo.png" alt="Rodrigo Prestes Machado" width="3%" height="3%" border=0 style="border:0; text-decoration:none; outline:none"></a><br/>
<a rel="license" href="http://creativecommons.org/licenses/by/4.0/">Creative Commons Atribuição 4.0 Internacional</a>
<!-- .element: style="margin-bottom:40px; font-size: 14px; color:white; font-family: arial;" -->