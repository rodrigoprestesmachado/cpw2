---
layout: default
title:  Simulados: Segunda Parte
parent: Simulados
nav_order: 42
---

## Questões Práticas

1. Implemente um método chamado buscarUsuarios() que utilize fetch() para
acessar a URL https://test.com/users e faça todo o tratamento necessário da
Promise, incluindo a conversão da resposta para JSON, o tratamento de erros
usando .catch() (ou try/catch, caso prefira usar async/await) e a verificação
de respostas inválidas. O método deve retornar os dados corretamente em caso
de sucesso e, em caso de falha, retornar um erro tratado ou uma mensagem
descritiva adequada.
{: .fs-3 }

2. Crie um trecho de código em Vue chamado "ControleDeCliques" que tenha uma
propriedade chamada "valorInicial", contendo um número inteiro. O componente
deve exibir no template o total de cliques registrados e possuir um botão que,
ao ser pressionado, aumente esse total em 1 cada vez.
{: .fs-3 }

3. Crie uma função chamada simularRequisicao(valor) que retorne uma Promise. Essa
Promise deve ser resolvida com sucesso se o valor for true, ou rejeitada se o
valor for false.
Nota: [https://www.w3schools.com/js/js_promise.asp](https://www.w3schools.com/js/js_promise.asp)
{: .fs-3 }

## Questões Teóricas

1. O que é uma *Promise* em JavaScript?
* A) Um tipo de loop para executar código repetidamente.
* B) Um objeto que representa o resultado de uma operação assíncrona.
* C) Uma estrutura para declarar variáveis constantes.
* D) Um método para manipular o DOM.
{: .fs-3 }

2. Quais são os possíveis estados de uma Promise?
* A) "running", "stopped" e "paused"
* B) "open", "closed" e "pending"
* C) "pending", "resolved" e "rejected"
* D) "started", "inProgress" e "done"
{: .fs-3 }

3. Como você pode "pegar" o resultado de uma Promise bem-sucedida?
* A) Usando `then(...)`
* B) Usando `for`
* C) Usando `while`
* D) Usando `switch`
{: .fs-3 }

4. E como você pode tratar um erro (rejeição) de uma Promise?
* A) Com `then(...)`
* B) Com `catch(...)`
* C) Com `if`
* D) Com `map(...)`
{: .fs-3 }

5. Qual é a utilidade das palavras-chave `async` e `await` no contexto de Promises?
* A) Para acelerar as Promises para que sejam síncronas.
* B) Para simplificar o uso das Promises, permitindo "esperar" a resolução de uma Promise dentro de uma função assíncrona.
* C) Para criar Promises "mais seguras".
* D) Para cancelar Promises automaticamente.
{: .fs-3 }

6. Qual é a principal função da diretiva v-bind em componentes Vue?
* A) Executar métodos imediatamente quando o componente é criado.
* B) Declarar propriedades que o componente espera receber.
* C) Gerar eventos de clique automaticamente entre componentes.
* D) Vincular dinamicamente atributos HTML ou props a expressões reativas.
{: .fs-3 }

7. O que é encadeamento de Promises ("promise chaining")?
* A) Usar várias Promises em paralelo sem depender umas das outras.
* B) Retornar outra Promise dentro de `then(...)`, para executar operações assíncronas em sequência.
* C) Fechar uma Promise com `finally` imediatamente.
* D) Usar `Promise.resolve()` várias vezes para "ligar" Promises.
{: .fs-3 }

8. Qual é a principal função de slots em componentes do Vue.js?
* A) Criar pontos de inserção nos componentes onde o conteúdo do componente pai pode ser renderizado
* B) Permitir que um componente filho passe dados para o componente pai por meio de props
* C) Garantir que todo conteúdo interno de um componente seja estático e imutável
* D) Substituir o sistema de gerenciamento de estado (como Vuex ou Pinia)
{: .fs-3 }

9. Qual é a finalidade de um slot nomeado (<slot name="...">) em um componente Vue?
* A) Permitir que o componente pai envie dados reativos diretamente para o template do componente filho
* B) Definir múltiplas áreas distintas onde conteúdos diferentes podem ser inseridos no componente filho
* C) Criar um slot que sempre sobrescreve o conteúdo padrão (fallback)
* D) Tornar o slot acessível apenas se o componente estiver usando v-model
{: .fs-3 }

10. Qual é o principal objetivo do formato JSON (JavaScript Object Notation)?
* A) Um protocolo de rede para estabelecer e gerenciar conexões de internet.
* B) Um formato leve para troca de dados entre sistemas e plataformas.
* C) Usado para estilizar a apresentação visual de páginas web (CSS).
* D) Uma linguagem de programação para criar scripts e lógica no lado do servidor.
{: .fs-3 }

11. Em um objeto JSON (delimitado por chaves {}), qual símbolo é usado para
separar a chave (key) do seu valor (value) e qual símbolo é usado para separar
os diferentes pares chave-valor?
* A) Chave/Valor: Dois pontos (:); Pares: Vírgula (,).
* B) Chave/Valor: Dois pontos (:); Pares: Ponto e vírgula (;).
* C) Chave/Valor: Ponto e vírgula (;); Pares: Dois pontos (:).
* D) Chave/Valor: Sinal de igual (=); Pares: Ponto e vírgula (;).
{: .fs-3 }

12. No JSON, como são representados os Objetos, e qual a regra fundamental para as suas chaves (Keys)?
* A) Representados por chaves {}, e as chaves podem ser Strings ou números, sem a necessidade de aspas.
* B) Representados por colchetes [], e as chaves devem ser sempre números inteiros.
* C) Representados por chaves {}, e as chaves (keys) devem ser Strings, delimitadas por aspas duplas.
* D) Representados por parênteses (), e as chaves podem ser opcionais, dependendo do valor.
{: .fs-3 }

13. Qual é o principal propósito do protocolo HTTP (Hypertext Transfer Protocol) na World Wide Web?
* A) Definir a formatação e o layout visual das páginas web no navegador (CSS).
* B) Gerenciar o endereçamento e o roteamento de pacotes de dados pela internet (TCP/IP).
* C) Transferir documentos de hipertexto (como HTML) e outros dados de recursos entre um servidor e um cliente (navegador).
* D) Proteger a comunicação entre servidores web e navegadores por meio de criptografia (HTTPS).
{: .fs-3 }

14. Qual é a principal função e uma característica essencial do método HTTP GET?
* A) Usado para testar se um servidor está online, sem solicitar nenhum dado ou cabeçalho.
* B) Usado para solicitar e recuperar dados de um recurso específico do servidor, sendo considerado seguro e idempotente.
* C) Usado para enviar dados e criar novos recursos no servidor, modificando o estado do sistema.
* D) Usado para excluir um recurso específico no servidor, exigindo autenticação rigorosa.
{: .fs-3 }

15. Qual é o principal benefício arquitetural de utilizar componentes em uma aplicação Vue.js?
* A) Substituir o HTML tradicional pela sintaxe JSX para renderização de templates.
* B) Reduzir o tempo de compilação do código JavaScript e CSS.
* C) Centralizar todo o estado reativo da aplicação em um único arquivo raiz.
* D) Permitir a criação de unidades de interface de usuário (UI) reusáveis, isoladas e com lógica própria.
{: .fs-3 }

16. Em um Componente Filho (Child Component) do Vue.js, qual método é o padrão e mais recomendado para notificar o Componente Pai sobre uma mudança ou evento que ocorreu no filho?
* A) Usando o método $emit para disparar um evento customizado que o pai pode escutar no seu template.
* B) Chamando o método commit diretamente para atualizar o estado global da aplicação.
* C) Acessando o componente pai via $parent e chamando um de seus métodos diretamente.
* D) Modificando diretamente o valor de uma prop recebida do pai.
{: .fs-3 }
