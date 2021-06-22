export class User {
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
    getId() {
        return this.#id;
    }

    setId(id) {
        this.#id = id;
    }

    getName() {
        return this.#name;
    }

    setName(name) {
        this.#name = name;
    }

    getMessages() {
        return this.#messages;
    }

    setMessage(message) {
        this.#messages.push(message);
    }

}