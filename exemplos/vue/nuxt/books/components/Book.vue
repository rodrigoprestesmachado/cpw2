<template>
  <div class="card">
    <div class="card-content">
      <span class="icon-text">
        <span class="icon">
          <i class="fas fa-book"></i>
        </span>
        <span>
          <h1 class="is-size-6 lucida">{{ title }}</h1>
          <h2 class="is-size-7 lucida">{{ author }}</h2>
          <p class="is-size-7 has-text-grey lucida">{{ year }}</p>
        </span>
      </span>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    title: String,
    author: String,
    year: Number,
  },
};
</script>

<style scoped>
.lucida {
  font-family: "Lucida", monospace;
}
</style>
