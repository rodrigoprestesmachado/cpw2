export class Message {

    // Atributos privados
    #id;

    // Construtor
    constructor(id) {
        this.#id = id;
    }

    // Get and Set
    getId() {
        return this.#id;
    }

    setId(id) {
        this.#id = id;
    }

}