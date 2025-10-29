---
layout: default
title: Asynchronous Javascript and XML (AJaX)
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

Uma requisição assíncrona é uma requisição que é feita sem interromper o
fluxo de execução do programa. Isso significa que o programa pode continuar
executando outras tarefas enquanto aguarda a resposta do servidor, incluindo
interagir com o usuário, atualizar a interface gráfica da página e/ou realizar
outras requisições.

Em JavaScript, você pode usar o objeto `XMLHttpRequest` (XHR) para fazer
requisições Ajax. Aqui está um exemplo básico de como fazer uma requisição Ajax
para recuperar dados, normalmente em JSON (_JavaScript Object Notation_), de um
servidor:

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

Neste exemplo, usamos o método GET para recuperar dados da URL especificada de
forma assíncrona. Quando a resposta é recebida, verificamos o status da resposta
para garantir que a requisição foi bem-sucedida antes de processar os dados.

O método `open()` é usado para configurar a requisição, especificando o método
HTTP (GET, POST, PUT, DELETE, etc.), a URL do servidor e se a requisição deve
ser assíncrona ou não. O método `send()` é usado para enviar a requisição para o
servidor.

Já a propriedade `onload` é usada para definir a função a ser chamada quando a
requisição for concluída. Neste caso, verificamos o status da resposta para
garantir que a requisição foi bem-sucedida antes de processar os dados.

O código de status HTTP 200 indica que a requisição foi bem-sucedida, enquanto
os códigos de status 4xx e 5xx indicam erros na requisição. Se a requisição
falhar, exibimos uma mensagem de erro no console.

Finalmente o método `JSON.parse()` é usado para converter a String de resposta
em um objeto JavaScript, caso a resposta seja em JSON.

## JSON (_JavaScript Object Notation_)

JSON (_JavaScript Object Notation_) é um formato de dados leve e fácil de ler
que é amplamente utilizado para troca de dados entre sistemas. Ele é baseado na
sintaxe de objetos JavaScript e é comumente usado para representar dados
estruturados, como objetos e arrays, em uma forma que pode ser facilmente
serializada e desserializada.

Aqui está um exemplo de um objeto JSON que representa um livro:

```json
{
  "title": "JavaScript: The Good Parts",
  "author": "Douglas Crockford",
  "year": 2008
}
```

Neste exemplo, temos um objeto JSON com três propriedades: `title`, `author` e
`year`, que representam o título, autor e ano de lançamento de um livro,
respectivamente.

Para converter uma String JSON em um objeto JavaScript, você pode usar o método
`JSON.parse()`, como mostrado no exemplo anterior. Da mesma forma, para
converter um objeto JavaScript em uma String JSON, você pode usar o método
`JSON.stringify()`:

```javascript
var book = {
  title: "JavaScript: The Good Parts",
  author: "Douglas Crockford",
  year: 2008
};

var json = JSON.stringify(book);
console.log(json); // Exibe a String JSON
```

Os arrays em JSON são representados por colchetes `[]`, enquanto os objetos são
representados por chaves `{}`. Por exemplo, aqui está um exemplo de um array
JSON que contém uma lista de livros:

```json
[
  {
    "title": "JavaScript: The Good Parts",
    "author": "Douglas Crockford",
    "year": 2008
  },
  {
    "title": "Eloquent JavaScript",
    "author": "Marijn Haverbeke",
    "year": 2011
  }
]
```

Neste exemplo, temos um array JSON com dois objetos que representam livros
diferentes. Cada objeto contém as propriedades `title`, `author` e `year`,
representando o título, autor e ano de lançamento de cada livro, respectivamente.

## Fetch API

A Fetch API é uma interface moderna para fazer requisições assíncronas em
JavaScript. Ela fornece uma maneira mais simples e poderosa de lidar com
requisições Ajax em comparação com o objeto `XMLHttpRequest`.

Aqui está um exemplo de como fazer uma requisição usando a Fetch API:

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

Neste exemplo, usamos a função `fetch()` para fazer uma requisição GET para a
URL especificada. A função `fetch()` retorna uma Promise que resolve para o
objeto `Response` representando a resposta da requisição.

Usamos o método `then()` para processar a resposta da requisição. Dentro da
função de callback passada para o método `then()`, verificamos se a resposta foi
bem-sucedida (status 200) e, em seguida, chamamos o método `json()` para
converter a resposta em um objeto JavaScript. Se a requisição falhar, a Promise
é rejeitada e o método `catch()` é chamado para lidar com o erro.

A Fetch API é mais moderna e fácil de usar do que o objeto `XMLHttpRequest` e
fornece uma maneira mais limpa e concisa de fazer requisições assíncronas em
JavaScript.

Nota: A Fetch API trabalha por meio de uma Promise, que é um objeto que
representa o resultado de uma operação assíncrona. As Promises são uma maneira
de lidar com operações assíncronas de forma mais limpa e concisa em JavaScript.
Assim, primeiro entenda o conceito de Promises para poder trabalhar com a Fetch
API.

Para fazer mesma requisição anterior, mas com o método POST, você pode fazer
algo assim:

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

Neste exemplo, usamos o método `fetch()` para fazer uma requisição POST para a
URL especificada. Passamos um objeto de configuração como segundo argumento para
o método `fetch()`, que contém as opções da requisição, incluindo o método HTTP
(POST), os cabeçalhos da requisição (Content-Type) e o corpo da requisição
(JSON.stringify({ key: 'value' })).

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