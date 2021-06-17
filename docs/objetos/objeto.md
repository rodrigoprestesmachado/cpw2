# Orientação a Objetos

## Conceitos básicos de orientação a objetos

* Objeto - a melhor forma de compreenter o que são os objetos é associar com uma abstração do mundo real. No mundo real, os objetos possuem caracteríscas e comportamentos. Por exemplo, um carro possui caracteríscas como cor, tamanho, peso, etc. e comportamentos como ligar, andar para frente e para trás.  Emum sistema, as caracteríscas são chamados de **atributos** ("variáveis") e os comportamentos, que conferem uma ação para os objetos, são chamado de **métodos** ("funções/procedimentos"). A figura abaixo ilustra um objeto:

<center>
<img src="img/objeto.png" width="250" height="250"><br/>
Figura 1 - Objeto
</center>

* Classes - Definem o formato de um objeto (molde ou template) e são utilizadas para intanciar (criar) os objetos

<center>
<img src="img/classes.png" width="250" height="250"><br/>
Figura 2 - Classe
</center>

* Encapsulamento - Encapsulamento consiste em isolar aspectos internos de um objeto. Observe que na Figura 1, não conseguimos acesso direto aos atributos, ou seja, necessitamos passar/executar um método para obter o valor de um abrituto. O encapsulamento é um conceito fundamental pois diminui a quandidade de variaveis globais em um sistema.

## Orientação a objetos em JavaScript: ECMAScript 2015

Primeiro, observe o diagrama de classes abaixo:
<center>
<iframe src="https://cpw2.rpmhub.dev/objetos/diagrama.html" title="Diagrama de" width="90%" height="400" style="border:none;"></iframe>
</center>

Para implementar o diagrama de classes acima podemos iniciar implementando a classe, os atributos (privados) e o construtor da seguinte maneira:

```javascript
class User {
    // Atributos privados (#)
    #id;
    #name;

    // Construtor
    constructor(id, name) {
      this.#id = id;
      this.#name = name;
    }
  }
  ```

  Como os atributos são privados, devido a presença do sustenido (#), então o próximo passo é criar os métodos `get` e `set` para cada atributo:

  ```javascript
  class User {
    // Atributos privados (#)
    #id;
    #name;

    // Construtor
    constructor(id, name) {
      this.#id = id;
      this.#name = name;
    }

    // Get and Set
    getId(){
        return this.#id;
    }
    
    setId(id){
        this.#id = id;
    }

    getName(){
        return this.#name;
    }
    
    setName(name){
        this.#name = name;
    }
  }
  ```

O proóximo passo é implementar a classe `Message`da seguinte maneira:

```javascript
class Message {

    // Atributos privados
    #id;
    #text;

    // Construtor
    constructor(id, text) {
        this.#id = id;
        this.#text = text;
      }

    // Get and set
    getId(){
        return this.#id;
    }
    
    setId(id){
        this.#id = id;
    }

    getText(){
        return this.#text;
    }
    
    setText(text){
        this.#text = text;
    }
  }

```

Existe um relacionamento entre as classes `User` e `Message` indicando que, um ususário pode escrever uma ou mais mensagens e a mensagem pode ser apenas de um ususário. Note que o diagrama mostra uma seta de `User` para `Message`, ou seja, deve ser implementado apenas o relacionamento da classe `User` para `Message` e não vice-versa. Assim, a classe `User` deve ser modificada da seguinte forma:

```javascript
class User {
    // Atributos privados (#)
    #id;
    #name;
    #messages;

    // Construtor
    constructor(id, name) {
      this.#id = id;
      this.#name = name;
      this.#messages = [];
    }

    // Get and Set
    getId(){
        return this.#id;
    }
    
    setId(id){
        this.#id = id;
    }

    getName(){
        return this.#name;
    }
    
    setName(name){
        this.#name = name;
    }

    getMessages(){
        return this.#messages;
    }
    
    setMessage(message){
        this.#messages.push(message);
    }
  }
  ```

Como um usuário pode escrever muitas mensagens, então note que o atributo `#messages` foi implementado no construtor como um `Array`. Observe também que o método `setMessage` irá receber um objeto da classe `Message` que, posteriormente, será adicionado no array de mensagens. 

Para criar objetos dessas duas classes podemos criar terceiro arquivo `index.js` por exemplo:

```javascript
//https://developer.mozilla.org/pt-BR/docs/Web/JavaScript/Reference/Strict_mode
"use strict";

// Importando as duas classes
import {User} from "./module/User.js"
import {Message} from "./module/Message.js"

// Instanciando os objetos
let user = new User(1, "Rodrigo");
let message = new Message(1, "minha primeira mensagem");
// associando uma mensagem ao usuário Rodrigo
user.setMessage(message);

// Mostrando no console
console.log(user.getId());
console.log(user.getMessages()[0].getText());
```

Se tentarmos executar o `index.js` com o [Node](https://nodejs.org/en/) (`node index.js`), receberemos um erro parecido com esse: 

```
node index.js
index.js:5
import {User} from "./User.js"
        ^^^^
SyntaxError: The requested module './User.js' does not provide an export named 'User'
```

Isso aconteceu pois devemos exportar (`export`) as classes/tipos `User` e também `Message` da seguinte maneira:

```javascript
export class User {
```

```javascript
export class Message {
```

Quando utilizamos a directiva `export` no fundo estamos criando um [Módulo em JavaScript](https://developer.mozilla.org/pt-BR/docs/Web/JavaScript/Guide/Modules). Neste sentido, temos que declarar para o [Node](https://nodejs.org/en/) que estamos trabalhando com um módulo criando um arquivo chamado `package.json` com o seguinte conteúdo:

```json
{  
    "type": "module"   
}
```

Finalmente, podemos agora executar os nossos objetos escritos no arquivo `index.js` da seguinte maneira:

```shell
node index.js
```

Da mesma forma, agora podemos exeutar o nosso `index.js` dentro de uma página HTML, mas, temos que indicar que estamos trabalhando com um módulo `<script src="index.js" type="module"></script>`, veja o exemplo:

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JS</title>
</head>
<body>
    Por favor, olhe o console do navegador
    <script src="index.js" type="module"></script>
</body>
</html>
```

Os códigos desse exemplo podem ser obtidos e analisados nesse [repositório]((https://cpw2.rpmhub.dev/objetos/exemplo)).

# JavaScript Object Notation - JSON

* JavaScript Object Notation (JSON) é uma notação que nos permite escrever objetos em JavaScript muito utilizada para troca de dados entre sistemas, um exemplo de objetos JavaScript escrito na notação JSON pode ser:

```json
{"estudantes ":[
     { "nome": "João", "notas": [ 8, 9, 5 ] },
     { "nome": "Maria", "notas": [ 8, 10, 7 ] },
]}
```
No exemplo acima temos um objeto JavaScript que possui um atributo chamado `estudantes` que, por sua vez, possui um array contendo dois objetos. Note que o parênteses `{}` definem o objeto, os colchetes `[]` definem um array (que podem ser de objetos ou não) e os dois pontos `:` separa o atributo do seu valor.

# Referências 

[MDN: Classes](https://developer.mozilla.org/pt-BR/docs/Web/JavaScript/Reference/Classes)

[MDN: Membros privados](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Classes/Private_class_fields)

[JSON](https://www.json.org)




