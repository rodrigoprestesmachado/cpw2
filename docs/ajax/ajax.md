---
layout: default
title: Asynchronous Javascript and XML
parent: JavaScript Básico
nav_order: 32
---

# Asynchronous Javascript and XML (AJaX)

<center>
    <iframe src="https://cpw2.rpmhub.dev/ajax/slides/index.html#/"
        title="Asynchronous Javascript and XML"
        width="90%" height="500" style="border:none;">
    </iframe>
</center>

Ajax, ou Asynchronous JavaScript and XML, é uma técnica de programação que
permite atualizar partes específicas de uma página Web sem recarregar a página
inteira. Isso é feito através do envio de requisições assíncronas para o
servidor, permitindo que o navegador continue interagindo com o usuário
enquanto aguarda a resposta do servidor.
{: .fs-3 }

Uma requisição assíncrona é uma requisição que é feita sem interromper o
fluxo de execução do programa. Isso significa que o programa pode continuar
executando outras tarefas enquanto aguarda a resposta do servidor, incluindo
interagir com o usuário, atualizar a interface gráfica da página e/ou realizar
outras requisições.
{: .fs-3 }

Em JavaScript, você pode usar o objeto `XMLHttpRequest` (XHR) para fazer
requisições Ajax. Aqui está um exemplo básico de como fazer uma requisição Ajax
para recuperar dados, normalmente em JSON (_JavaScript Object Notation_), de um
servidor:
{: .fs-3 }

```javascript
// Criando um objeto XMLHttpRequest
var xhr = new XMLHttpRequest();

// Configurando a requisição (método, URL, assincronismo)
xhr.open('GET', 'http://localhost/api/dados.json', true);

// Definindo a função a ser chamada quando a requisição for concluída
xhr.onload = function() {
  if (xhr.status >= 200 && xhr.status < 300) {
    // Convertendo a resposta para JSON (caso seja JSON)
    var response = JSON.parse(xhr.responseText);
    console.log(response); // Exibindo os dados recebidos
  } else {
    console.error('Erro ao carregar dados: ' + xhr.status);
  }
};

// Enviando a requisição
xhr.send();
```
{: .fs-3 }

Neste exemplo, usamos o método GET para recuperar dados da URL especificada de
forma assíncrona. Quando a resposta é recebida, verificamos o status da resposta
para garantir que a requisição foi bem-sucedida antes de processar os dados.
{: .fs-3 }

O método `open()` é usado para configurar a requisição, especificando o método
HTTP (GET, POST, PUT, DELETE, etc.), a URL do servidor e se a requisição deve
ser assíncrona ou não. O método `send()` é usado para enviar a requisição para o
servidor.
{: .fs-3 }

Já a propriedade `onload` é usada para definir a função a ser chamada quando a
requisição for concluída. Neste caso, verificamos o status da resposta para
garantir que a requisição foi bem-sucedida antes de processar os dados.
{: .fs-3 }

O código de status HTTP 200 indica que a requisição foi bem-sucedida, enquanto
os códigos de status 4xx e 5xx indicam erros na requisição. Se a requisição
falhar, exibimos uma mensagem de erro no console.
{: .fs-3 }

Finalmente o método `JSON.parse()` é usado para converter a String de resposta
em um objeto JavaScript, caso a resposta seja em JSON.
{: .fs-3 }

## Fetch API

A Fetch API é uma interface moderna para fazer requisições assíncronas em
JavaScript. Ela fornece uma maneira mais simples e poderosa de lidar com
requisições Ajax em comparação com o objeto `XMLHttpRequest`.
{: .fs-3 }

Aqui está um exemplo de como fazer uma requisição usando a Fetch API:
{: .fs-3 }

```javascript
fetch('http://localhost/api/dados.json')
  .then(response => {
    if (!response.ok) {
      throw new Error('Erro ao carregar dados: ' + response.status);
    }
    return response.json();
  })
  .then(data => {
    console.log(data);
  })
  .catch(error => {
    console.error(error);
  });
```
{: .fs-3 }

Neste exemplo, usamos a função `fetch()` para fazer uma requisição GET para a
URL especificada. A função `fetch()` retorna uma Promise que resolve para o
objeto `Response` representando a resposta da requisição.
{: .fs-3 }

Usamos o método `then()` para processar a resposta da requisição. Dentro da
função de callback passada para o método `then()`, verificamos se a resposta foi
bem-sucedida (status 200) e, em seguida, chamamos o método `json()` para
converter a resposta em um objeto JavaScript. Se a requisição falhar, a Promise
é rejeitada e o método `catch()` é chamado para lidar com o erro.
{: .fs-3 }

A Fetch API é mais moderna e fácil de usar do que o objeto `XMLHttpRequest` e
fornece uma maneira mais limpa e concisa de fazer requisições assíncronas em
JavaScript.
{: .fs-3 }

Nota: A Fetch API trabalha por meio de uma Promise, que é um objeto que
representa o resultado de uma operação assíncrona. As Promises são uma maneira
de lidar com operações assíncronas de forma mais limpa e concisa em JavaScript.
Assim, primeiro entenda o conceito de Promises para poder trabalhar com a Fetch
API.
{: .fs-3 }

Para fazer mesma requisição anterior, mas com o método POST, você pode fazer
algo assim:
{: .fs-3 }

```javascript
fetch('http://localhost/api/dados.json', {
  method: 'POST',
  headers: {
    'Content-Type': 'application/json'
  },
  body: JSON.stringify({ key: 'value' })
})
  .then(response => {
    if (!response.ok) {
      throw new Error('Erro ao carregar dados: ' + response.status);
    }
    return response.json();
  })
  .then(data => {
    console.log(data);
  })
  .catch(error => {
    console.error(error);
  });
```
{: .fs-3 }

Neste exemplo, usamos o método `fetch()` para fazer uma requisição POST para a
URL especificada. Passamos um objeto de configuração como segundo argumento para
o método `fetch()`, que contém as opções da requisição, incluindo o método HTTP
(POST), os cabeçalhos da requisição (Content-Type) e o corpo da requisição
(JSON.stringify({ key: 'value' })).
{: .fs-3 }

## Referências

* [AJaX Introduction](https://www.w3schools.com/js/js_AJaX_intro.asp) no W3C Schools

* MILETTO, Evandro Manara. [Desenvolvimento de software II: introdução ao desenvolvimento web com html, css, javascript e php](https://biblioteca.ifrs.edu.br/pergamum_ifrs/biblioteca_s/acesso_login.php?cod_acervo_acessibilidade=5020682&acesso=aHR0cHM6Ly9pbnRlZ3JhZGEubWluaGFiaWJsaW90ZWNhLmNvbS5ici9ib29rcy85Nzg4NTgyNjAxOTY5&label=acesso%20restrito). Porto Alegre Bookman 2014 1 recurso online ISBN 9788582601969.

<center>
    <a href="https://rpmhub.dev" target="blanck">
        <img src="../imgs/logo.png" alt="Rodrigo Prestes Machado" width="3%"
        height="3%" border=0 style="border:0; text-decoration:none;
        outline:none">
    </a>
    <br/>
    <a rel="license" href="http://creativecommons.org/licenses/by/4.0/">
        CC BY 4.0 DEED
    </a>
</center>
