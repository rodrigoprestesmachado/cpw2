---
layout: default
title: Eventos
parent: JavaScript Básico
nav_order: 17
---

# Eventos

<center>
<iframe src="https://cpw2.rpmhub.dev/eventos/slides/index.html#/" title="Eventos" width="90%" height="500" style="border:none;"></iframe>
</center>

## Resumo

Eventos em JavaScript são ações que ocorrem durante a interação do usuário com
uma página da web. Eles são fundamentais para tornar as páginas dinâmicas e
interativas. Aqui está um resumo das principais características dos eventos em
JavaScript:

### Tipos de Eventos

- Existem diversos tipos de eventos, como eventos de clique (_click_), eventos
de teclado (_keydown_, _keyup_), eventos de mouse (mouseover, _mouseout_),
eventos de formulário (_submit_, _change_), entre outros.

### Eventos Inline

- Os eventos podem ser adicionados diretamente no HTML usando atributos
como `onclick`, `onmouseover`, etc.

- Exemplo de evento inline:

```html
    <button onclick="minhaFuncao()">Clique aqui</button>
```

### Adição de Eventos

- Os eventos também são adicionados a elementos HTML usando métodos como
`addEventListener`.

- Exemplo de adição de evento de clique:

```javascript
    let botao = document.querySelector('#meuBotao');
    botao.addEventListener('click', function() {
        // código a ser executado quando o botão for clicado
    });
```

### Objeto Event

- Quando um evento é disparado, um objeto Event é criado e passado como
argumento para a função de tratamento do evento.

- O objeto Event contém informações sobre o evento, como o tipo, o elemento
alvo, teclas pressionadas, entre outras.

- Exemplo de uso do objeto Event:

```javascript
    botao.addEventListener('click', function(event) {
        console.log('Evento de clique!');
        console.log('Elemento alvo:', event.target);
    });
```

### Prevenção de Comportamento Padrão

- Em certos casos, é necessário prevenir o comportamento padrão de um evento,
como o envio de um formulário ao pressionar Enter.

- Isso é feito utilizando o método [`preventDefault()`](https://developer.mozilla.org/en-US/docs/Web/API/Event/preventDefault) do objeto Event.

- Exemplo de prevenção de comportamento padrão:

```javascript
    formulario.addEventListener('submit', function(event) {
        event.preventDefault(); // impede o envio padrão do formulário
        // código para processar o formulário
    });
```

## Referências

* Comunidade [Discord](https://discord.com/invite/C29cqvm): canal `#cpw2`

* MDN [JavaScript basics](https://developer.mozilla.org/en-US/docs/Learn/Getting_started_with_the_web/JavaScript_basics)

* Tutorial de [JavaScript](http://www.w3schools.com/js) do W3C

* MILETTO, Evandro Manara. [Desenvolvimento de software II: introdução ao desenvolvimento web com html, css, javascript e php](https://biblioteca.ifrs.edu.br/pergamum_ifrs/biblioteca_s/acesso_login.php?cod_acervo_acessibilidade=5020682&acesso=aHR0cHM6Ly9pbnRlZ3JhZGEubWluaGFiaWJsaW90ZWNhLmNvbS5ici9ib29rcy85Nzg4NTgyNjAxOTY5&label=acesso%20restrito). Porto Alegre Bookman 2014 1 recurso online ISBN 9788582601969.

<center>
<a href="https://github.com/rodrigoprestesmachado" target="blanck"><img src="../imgs/logo.png" alt="Rodrigo Prestes Machado" width="3%" height="3%" border=0 style="border:0; text-decoration:none; outline:none"></a><br/>
<a rel="license" href="http://creativecommons.org/licenses/by/4.0/">CC BY 4.0 DEED</a>
</center>