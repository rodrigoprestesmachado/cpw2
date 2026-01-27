<template>
  <div class="container justify-content-center">
    <BookForm @bookSubmitted="execute" class="mt-6 mb-6 ml-6 mr-6" />

    <template v-for="book in books">
      <Book
        :title="book.title"
        :author="book.author"
        :year="book.year"
        class="mb-2 ml-6 mr-6"
      />
    </template>
  </div>
</template>

<script>
export default {
  data() {
    return {
      books: [],
    };
  },

  /**
   *  This method is called when the component is mounted on the page.
   */
  async beforeCreate() {
    try {
      let response = await fetch("http://localhost:3000/books.json");
      this.books = await response.json();
    } catch (books) {
      console.log(error);
    }
  },

  methods: {
    execute(book) {
        console.log(book)
    },
  },

};
</script>
