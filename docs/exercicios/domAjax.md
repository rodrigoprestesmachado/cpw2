---
layout: default
title: Exercícios
parent: JavaScript
nav_order: 33
---

## Exercícios de JavaScript Básico

Abaixo estão listados alguns exercícios básicos para praticar a linguagem de
programação JavaScript. Os exercícios têm como objetivo familiarizar o estudante
com a sintaxe da linguagem e com a manipulação de variáveis, estruturas de
controle, funções e eventos.

### Exercício 1
Crie um programa que solicite ao usuário seu nome, idade e profissão. Em
seguida, exiba uma mensagem de boas-vindas contendo essas informações.

### Exercício 2
Crie um programa que solicite ao usuário o valor de um produto e a quantidade
que ele deseja comprar. Em seguida, exiba o valor total da compra.

### Exercício 3
Crie uma função chamada `contagemRegressiva` que captura um valor de
de uma função `prompt` (ou campo de texto HTML). A função deve exibir uma
contagem regressiva a partir do número recebido até zero. o atingir 0 na
contagem regressiva, a função deve imprimir "Lançamento!".

### Exercício 4
Crie um programa que solicite ao usuário um número e exiba a tabuada desse
   número de 1 a 10.

### Exercício 5
Crie uma página HTML com um botão e um contador de cliques. No JavaScript
associado à página, adicione um evento ao botão para incrementar o contador
de cliques em 1 cada vez que o botão for clicado, e atualize o valor do
contador na página. Além disso, utilize um estilo CSS para estilizar o botão
e o contador, tornando a interface mais amigável e visualmente atraente.

### Exercício 6
Crie uma página HTML com um formulário de cadastro contendo campos para nome,
e-mail e senha, juntamente com um botão de envio. No arquivo
JavaScript associado à página, adicione um evento ao botão de envio para
validar os campos do formulário antes de serem enviados. A validação deve
verificar se todos os campos foram preenchidos e se a senha possui pelo
menos 8 caracteres. Caso a validação seja bem-sucedida, exiba uma mensagem
de sucesso na página; caso contrário, exiba uma mensagem de erro indicando
quais campos estão inválidos. Utilize também estilos CSS para melhorar a
apresentação do formulário e das mensagens de feedback. Este exercício visa
praticar o uso de eventos de formulário em JavaScript para validar dados e
fornecer feedback ao usuário durante a interação com a página web.

### Exercício 7
Crie uma página HTML com um campo de texto e um botão. No arquivo JavaScript
associado à página, adicione um evento ao botão para calcular o fatorial do
número digitado no campo de texto. O fatorial de um número é o produto de
todos os números inteiros positivos de 1 até o próprio número. Por exemplo,
o fatorial de 5 é 5 x 4 x 3 x 2 x 1 = 120. Logo, exiba o resultado do cálculo
na página.

### Exercício 8
Crie um programa que gerencie uma lista de tarefas utilizando um array em
JavaScript. O programa deve ter as seguintes funcionalidades: a função
`adicionarTarefa`, que recebe uma string representando uma nova tarefa e a
adiciona à lista de tarefas; a função `removerTarefa`, que recebe um índice
como parâmetro e remove a tarefa correspondente desse índice da lista; e a
função `listarTarefas`, que imprime todas as tarefas da lista,
numeradas sequencialmente. Teste o programa adicionando algumas tarefas,
removendo uma delas e listando as tarefas restantes para verificar o
funcionamento correto do array e das funções implementadas.

### Respostas dos Exercícios de JavaScript Básico

As respostas para os exercícios estão disponíveis no repositório do
[GitHub](https://github.com/rodrigoprestesmachado/cpw2/tree/dev/exemplos/exercicios/basicos/src).

Algumas observações sobre as respostas:

* A resposta do exercício 1, mostra como utilizar o Node.js para capturar os
dados de entrada dos usuários. Porém, esse exercício poderia ser resolvido com
o uso de um formulário HTML.

* Já na resposta do exercício 3, foi utilizado as funções
`setInterval` e `clearInterval` para realizar a contagem regressiva, porém, o
exercício poderia ser resolvido de outras maneiras.

## Exercícios sobre DOM

### 1: Gerador de Cores Aleatórias
O objetivo deste exercício é criar um botão que, ao ser clicado, gera uma cor
aleatória e aplica ao fundo da página. Assim, Crie um arquivo HTML simples com
um botão. No JavaScript, selecione o botão usando `document.getElementById()` ou
`document.querySelector()`. Crie uma função que seja chamada quando o botão for
clicado. Esta função deve gerar uma cor aleatória (pode ser hexadecimal, RGB,
ou nome da cor) e aplicar ao fundo da página. Vincule a função ao evento de
clique do botão.

### 2: Esconder e Mostrar Elemento.
O objetivo deste exercício é criar um botão que esconde e mostra um elemento na
página. Assim, Crie um arquivo HTML com uma estrutura básica, incluindo um
elemento (por exemplo, um parágrafo ou uma div) com algum conteúdo e um botão.
No JavaScript, selecione o botão e o elemento que você deseja esconder/mostrar
usando `document.getElementById()` ou `document.querySelector()`. Implemente uma
função que seja chamada quando o botão for clicado. Dentro dessa função,
verifique se o elemento está visível ou oculto usando a propriedade
`style.display`. Se estiver visível, altere o `display` para "none"
para ocultá-lo; se estiver oculto, altere para "block" para mostrá-lo novamente.
Vincule a função ao evento de clique do botão.

### 3: Toggle de Classe.
O objetivo deste exercício é criar um botão que adiciona ou remove uma classe de
estilo de um elemento na página quando é clicado. Assim, Crie um arquivo HTML
com uma estrutura básica, incluindo um elemento (por exemplo, um parágrafo ou
uma div) e um botão. No CSS, defina algumas classes de estilo, por exemplo, uma
classe chamada "destaque" com uma cor de fundo diferente. No JavaScript, selecione
o botão e o elemento que você deseja alterar usando `document.getElementById()`
ou `document.querySelector()`. Implemente uma função que seja chamada quando o
botão for clicado. Dentro dessa função, verifique se o elemento possui a classe
"destaque". Se possuir, remova-a; se não possuir, adicione-a. Vincule a função
ao evento de clique do botão.

### 4: Desafio - Lista de Compras com Autocompletar
O objetivo deste exercício é criar uma lista de compras onde o usuário pode
adicionar itens com autocompletar para sugestões. Assim, siga os passos abaixo:

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

### 1: Requisição de Dados de um Servidor.

O objetivo deste exercício é fazer uma requisição Ajax para recuperar dados de
um servidor e exibir na página. Assim, Crie um arquivo HTML com uma estrutura
básica, incluindo um botão para iniciar a requisição e uma área para exibir os
dados recebidos. No JavaScript, selecione a área de exibição usando
`document.getElementById()` ou `document.querySelector()`. Implemente uma função
que seja chamada quando o botão for clicado. Dentro dessa função, crie um objeto
`XMLHttpRequest` e faça uma requisição GET para uma URL que retorne dados (por
exemplo, um arquivo JSON) usando o método `open()` e `send()`. Quando a resposta
for recebida, verifique o status da resposta e exiba os dados na área designada
na página.