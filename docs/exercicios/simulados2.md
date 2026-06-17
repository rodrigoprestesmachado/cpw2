---
layout: default
title: Simulado 2ª Parte
parent: Simulados
nav_order: 42
has_toc: false
---

## Questões práticas

1. Implemente um método chamado `buscarUsuarios()` que utilize `fetch()` para
acessar a URL `https://test.com/users` e faça todo o tratamento necessário da
*Promise*, incluindo a conversão da resposta para JSON, o tratamento de erros
com `.catch()` (ou `try/catch`, caso prefira usar `async`/`await`) e a verificação
de respostas HTTP inválidas. O método deve retornar os dados corretamente em caso
de sucesso e, em caso de falha, retornar um erro tratado ou uma mensagem
descritiva.
{: .fs-3 }

2. Crie um componente Vue chamado `ControleDeCliques` que tenha uma
propriedade chamada `valorInicial`, contendo um número inteiro. O componente
deve exibir no template o total de cliques registrados e possuir um botão que,
ao ser clicado, incremente esse total em 1.
{: .fs-3 }

3. Crie uma função chamada `simularRequisicao(valor)` que retorne uma *Promise*.
Ela deve ser resolvida se o valor for `true` e rejeitada se for `false`.

Nota: [https://www.w3schools.com/js/js_promise.asp](https://www.w3schools.com/js/js_promise.asp)
{: .fs-3 }

## Questões teóricas

1. O que é uma *Promise* em JavaScript?
* A) Um tipo de loop para executar código repetidamente.
* B) Um objeto que representa o resultado de uma operação assíncrona.
* C) Uma estrutura para declarar variáveis constantes.
* D) Um método para manipular o DOM.
{: .fs-3 }

2. Quais são os possíveis estados de uma *Promise*?
* A) `"running"`, `"stopped"` e `"paused"`
* B) `"open"`, `"closed"` e `"pending"`
* C) `"pending"`, `"resolved"` e `"rejected"`
* D) `"started"`, `"inProgress"` e `"done"`
{: .fs-3 }

3. Como você pode obter o resultado de uma *Promise* bem-sucedida?
* A) Usando `then(...)`
* B) Usando `for`
* C) Usando `while`
* D) Usando `switch`
{: .fs-3 }

4. Como você pode tratar um erro (rejeição) de uma *Promise*?
* A) Com `then(...)`
* B) Com `catch(...)`
* C) Com `if`
* D) Com `map(...)`
{: .fs-3 }

5. Qual é a utilidade das palavras-chave `async` e `await` no contexto de *Promises*?
* A) Acelerar as *Promises* para que sejam síncronas.
* B) Simplificar o uso das *Promises*, permitindo aguardar a resolução de uma *Promise* dentro de uma função assíncrona.
* C) Criar *Promises* mais seguras.
* D) Cancelar *Promises* automaticamente.
{: .fs-3 }

6. Qual é a principal função da diretiva `v-bind` em componentes Vue?
* A) Executar métodos imediatamente quando o componente é criado.
* B) Declarar propriedades que o componente espera receber.
* C) Gerar eventos de clique automaticamente entre componentes.
* D) Vincular dinamicamente atributos HTML ou *props* a expressões reativas.
{: .fs-3 }

7. O que é encadeamento de *Promises* (*promise chaining*)?
* A) Usar várias *Promises* em paralelo, sem depender umas das outras.
* B) Retornar outra *Promise* dentro de `then(...)`, para executar operações assíncronas em sequência.
* C) Encerrar uma *Promise* com `finally` imediatamente.
* D) Usar `Promise.resolve()` várias vezes para conectar *Promises*.
{: .fs-3 }

8. Qual é o principal objetivo do formato JSON (*JavaScript Object Notation*)?
* A) Um protocolo de rede para estabelecer e gerenciar conexões de internet.
* B) Um formato leve para troca de dados entre sistemas e plataformas.
* C) Usado para estilizar a apresentação visual de páginas web (CSS).
* D) Uma linguagem de programação para criar scripts e lógica no lado do servidor.
{: .fs-3 }

9. Em um objeto JSON (delimitado por chaves `{}`), quais símbolos separam a chave do valor e os pares chave-valor entre si?
* A) Chave/valor: dois pontos (`:`); pares: vírgula (`,`).
* B) Chave/valor: dois pontos (`:`); pares: ponto e vírgula (`;`).
* C) Chave/valor: ponto e vírgula (`;`); pares: dois pontos (`:`).
* D) Chave/valor: sinal de igual (`=`); pares: ponto e vírgula (`;`).
{: .fs-3 }

10. No JSON, como são representados os objetos e qual é a regra fundamental para as chaves?
* A) Por chaves `{}`, e as chaves podem ser *strings* ou números, sem necessidade de aspas.
* B) Por colchetes `[]`, e as chaves devem ser sempre números inteiros.
* C) Por chaves `{}`, e as chaves devem ser *strings* delimitadas por aspas duplas.
* D) Por parênteses `()`, e as chaves podem ser opcionais, dependendo do valor.
{: .fs-3 }

11. Qual é o principal propósito do protocolo HTTP (*Hypertext Transfer Protocol*) na Web?
* A) Definir a formatação e o layout visual das páginas web no navegador (CSS).
* B) Gerenciar o endereçamento e o roteamento de pacotes de dados pela internet (TCP/IP).
* C) Transferir documentos de hipertexto (como HTML) e outros dados de recursos entre um servidor e um cliente (navegador).
* D) Proteger a comunicação entre servidores web e navegadores por meio de criptografia (HTTPS).
{: .fs-3 }

12. Qual é a principal função do método HTTP GET e qual característica essencial ele possui?
* A) Testar se um servidor está online, sem solicitar nenhum dado ou cabeçalho.
* B) Solicitar e recuperar dados de um recurso específico do servidor, sendo considerado seguro e idempotente.
* C) Enviar dados e criar novos recursos no servidor, modificando o estado do sistema.
* D) Excluir um recurso específico no servidor, exigindo autenticação rigorosa.
{: .fs-3 }
