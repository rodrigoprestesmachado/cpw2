<template>
  <div>
    <div class="card">
      <div class="card-content">
        <figure class="image is-32x32">
          <img src="@/assets/logo.png" alt="Logo do Rodrigo" />
        </figure>
        <h1 class="title">Cadastro de livros</h1>

        <div class="field">
          <p class="control has-icons-left">
            <input
              class="input"
              type="text"
              placeholder="Título do livro"
              v-model="title"
            />
            <span class="icon is-small is-left">
              <i class="fas fa-book"></i>
            </span>
          </p>
        </div>

        <div class="field">
          <p class="control has-icons-left">
            <input
              class="input"
              type="text"
              placeholder="Autor do livro"
              v-model="author"
            />
            <span class="icon is-small is-left">
              <i class="fas fa-pen-nib"></i>
            </span>
          </p>
        </div>

        <div class="field">
          <p class="control has-icons-left">
            <input
              class="input"
              type="date"
              placeholder="Ano de publicação"
              v-model="year"
            />
            <span class="icon is-small is-left">
              <i class="fas fa-calendar-days"></i>
            </span>
          </p>
        </div>
        <button class="button" @click="salvar()">Salvar</button>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      title: "",
      author: "",
      year: "",
    };
  },
  methods: {
    salvar() {
      console.log("Salvando livro");
      this.$emit("bookSubmitted", {
        title: this.title,
        author: this.author,
        year: this.year,
      });
    },
  },
};
</script>
