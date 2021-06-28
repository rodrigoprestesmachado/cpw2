import { Message } from "./Message.js";

export class VoiceMessage extends Message {

    // Atributos privados
    #audio;
    #duration

    // Construtor
    constructor(id, audio) {
        super(id);
        this.#audio = audio;
    }

    getAudio() {
        return this.#audio;
    }

    setAudio(audio) {
        this.#audio = audio;
    }

    getDuration() {
        return this.#duration;
    }

    setDuration(duration) {
        this.#duration = duration;
    }
    
}