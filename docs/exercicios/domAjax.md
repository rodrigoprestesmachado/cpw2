---
layout: default
title: Exercícios Dom e AJaX
parent: Dom e AJaX
nav_order: 33
---

## Exercícios sobre DOM

- **1**: Gerador de Cores Aleatórias
O objetivo deste exercício é criar um botão que, ao ser clicado, gera uma cor
aleatória e aplica ao fundo da página. Assim, Crie um arquivo HTML simples com
um botão. No JavaScript, selecione o botão usando `document.getElementById()` ou
`document.querySelector()`. Crie uma função que seja chamada quando o botão for
clicado. Esta função deve gerar uma cor aleatória (pode ser hexadecimal, RGB,
ou nome da cor) e aplicar ao fundo da página. Vincule a função ao evento de
clique do botão.

- **2**: Esconder e Mostrar Elemento. O objetivo deste exercício é criar um botão
que esconde e mostra um elemento na página. Assim, Crie um arquivo HTML com uma
estrutura básica, incluindo um elemento (por exemplo, um parágrafo ou uma div)
com algum conteúdo e um botão. No JavaScript, selecione o botão e o elemento que
você deseja esconder/mostrar usando `document.getElementById()` ou
`document.querySelector()`. Implemente uma função que seja chamada quando o botão
for clicado. Dentro dessa função, verifique se o elemento está visível ou oculto
usando a propriedade `style.display`. Se estiver visível, altere o `display` para
"none" para ocultá-lo; se estiver oculto, altere para "block" para mostrá-lo
novamente. Vincule a função ao evento de clique do botão.

- **3**: Toggle de Classe. O objetivo deste exercício é criar um botão que
adiciona ou remove uma classe de estilo de um elemento na página quando é clicado.
Assim, Crie um arquivo HTML com uma estrutura básica, incluindo um elemento
(por exemplo, um parágrafo ou uma div) e um botão. No CSS, defina algumas classes
de estilo, por exemplo, uma classe chamada "destaque" com uma cor de fundo
diferente. No JavaScript, selecione o botão e o elemento que você deseja alterar
usando `document.getElementById()` ou `document.querySelector()`. Implemente uma
função que seja chamada quando o botão for clicado. Dentro dessa função,
verifique se o elemento possui a classe "destaque". Se possuir, remova-a; se não
possuir, adicione-a. Vincule a função ao evento de clique do botão.

- **4 (desafio)**: Lista de Compras com Autocompletar. O objetivo deste
exercício é criar uma lista de compras onde o usuário pode adicionar itens com
autocompletar para sugestões. Assim, siga os passos abaixo:

    1. Crie um arquivo HTML com uma estrutura básica, incluindo um campo de
    entrada para adicionar itens à lista de compras e uma área para exibir a
    lista de compras.
    2. No JavaScript, defina um array com algumas sugestões de itens de compra,
    como "Maçã", "Leite", "Pão", etc.
    3. Implemente uma função que seja chamada quando o usuário digitar no campo
    de entrada, para sugerir automaticamente itens da lista de sugestões à
    medida que o usuário digita (autocompletar).
    4. Permita que o usuário adicione o item à lista de compras ao selecionar
    uma sugestão ou pressionar Enter após digitar o item desejado.
    5. Exiba dinamicamente os itens adicionados à lista de compras na área
    designada na página.
    6. Adicione estilos CSS para melhorar a aparência e usabilidade da interface
    da lista de compras e do autocompletar.

## Exercícios sobre AJaX

- **1**: Requisição de Dados de um Servidor. O objetivo deste exercício é fazer
uma requisição Ajax para recuperar dados de um servidor e exibir na página.
Assim, Crie um arquivo HTML com uma estrutura básica, incluindo um botão para
iniciar a requisição e uma área para exibir os dados recebidos. No JavaScript,
selecione a área de exibição usando `document.getElementById()` ou
`document.querySelector()`. Implemente uma função que seja chamada quando o
botão for clicado. Dentro dessa função, crie um objeto `XMLHttpRequest` e faça
uma requisição GET para uma URL que retorne dados (por exemplo, um arquivo JSON)
usando o método `open()` e `send()`. Quando a resposta for recebida, verifique
o status da resposta e exiba os dados na área designada na página.