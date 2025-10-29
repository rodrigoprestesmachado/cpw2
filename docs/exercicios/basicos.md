---
layout: default
title: Exercícios
parent: JavaScript Básico
nav_exclude: true
nav_order: 18
---

# Exercícios de JavaScript Básico

Abaixo estão listados alguns exercícios básicos para praticar a linguagem de
programação JavaScript. Os exercícios têm como objetivo familiarizar o estudante
com a sintaxe da linguagem e com a manipulação de variáveis, estruturas de
controle, funções e eventos.

1. Crie um programa que solicite ao usuário seu nome, idade e profissão.
   Em seguida, exiba uma mensagem de boas-vindas contendo essas informações.

2. Crie um programa que solicite ao usuário o valor de um produto e a quantidade
   que ele deseja comprar. Em seguida, exiba o valor total da compra.

3. Crie uma função chamada `contagemRegressiva` que captura um valor de
   de uma função `prompt` (ou campo de texto HTML). A função deve exibir uma
   contagem regressiva a partir do número recebido até zero. o atingir 0 na
   contagem regressiva, a função deve imprimir "Lançamento!".

4. Crie um programa que solicite ao usuário um número e exiba a tabuada desse
   número de 1 a 10.

5. Crie uma página HTML com um botão e um contador de cliques. No JavaScript
   associado à página, adicione um evento ao botão para incrementar o contador
   de cliques em 1 cada vez que o botão for clicado, e atualize o valor do
   contador na página. Além disso, utilize um estilo CSS para estilizar o botão
   e o contador, tornando a interface mais amigável e visualmente atraente.

6. Crie uma página HTML com um formulário de cadastro contendo campos para nome,
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

7. Crie uma página HTML com um campo de texto e um botão. No arquivo JavaScript
   associado à página, adicione um evento ao botão para calcular o fatorial do
   número digitado no campo de texto. O fatorial de um número é o produto de
   todos os números inteiros positivos de 1 até o próprio número. Por exemplo,
   o fatorial de5 é 5 x 4 x 3 x 2 x 1 = 120. Logo, exiba o resultado do cálculo
   na página.

8. Crie um programa que gerencie uma lista de tarefas utilizando um array em
   JavaScript. O programa deve ter as seguintes funcionalidades: a função
   `adicionarTarefa`, que recebe uma string representando uma nova tarefa e a
   adiciona à lista de tarefas; a função `removerTarefa`, que recebe um índice
   como parâmetro e remove a tarefa correspondente desse índice da lista; e a
   função `listarTarefas`, que imprime todas as tarefas da lista,
   numeradas sequencialmente. Teste o programa adicionando algumas tarefas,
   removendo uma delas e listando as tarefas restantes para verificar o
   funcionamento correto do array e das funções implementadas.


---
As respostas para os exercícios estão disponíveis no repositório do
[GitHub](https://github.com/rodrigoprestesmachado/cpw2/tree/dev/exemplos/exercicios/basicos/src).

Algumas observações sobre as respostas:

* A resposta do exercício 1, mostra como utilizar o Node.js para capturar os
dados de entrada dos usuários. Porém, esse exercício poderia ser resolvido com
o uso de um formulário HTML.

* Já na resposta do exercício 3, foi utilizado as funções
`setInterval` e `clearInterval` para realizar a contagem regressiva, porém, o
exercício poderia ser resolvido de outras maneiras.

---

## Referências 📚

* Comunidade [Discord](https://discord.com/invite/C29cqvm): canal `#cpw2`

* MDN [JavaScript basics](https://developer.mozilla.org/en-US/docs/Learn/Getting_started_with_the_web/JavaScript_basics)

* Tutorial de [JavaScript](http://www.w3schools.com/js) do W3C

* MILETTO, Evandro Manara. [Desenvolvimento de software II: introdução ao desenvolvimento web com html, css, javascript e php](https://biblioteca.ifrs.edu.br/pergamum_ifrs/biblioteca_s/acesso_login.php?cod_acervo_acessibilidade=5020682&acesso=aHR0cHM6Ly9pbnRlZ3JhZGEubWluaGFiaWJsaW90ZWNhLmNvbS5ici9ib29rcy85Nzg4NTgyNjAxOTY5&label=acesso%20restrito). Porto Alegre Bookman 2014 1 recurso online
ISBN 9788582601969.

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