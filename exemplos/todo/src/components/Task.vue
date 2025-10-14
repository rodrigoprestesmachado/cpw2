<template>
  <div class="card mb-5">
    <div class="card-content">
      <div v-if="editing === false">
        <h1>{{ task.name }}</h1>
        <h3>{{ task.description }}</h3>
      </div>
      <div v-if="editing === true">
        <input class="input" type="text" v-model="task.name" placeholder="Nome da tarefa" />
        <input class="input" type="text" v-model="task.description" placeholder="Descrição da tarefa" />
        <button @click="updateTask">
          <span class="icon is-large">
            <i class="fa-solid fa-floppy-disk fa-2x"></i>
          </span>
        </button>
        <button @click="cancelEdit">
          Cancelar
        </button>
      </div>
      <button class="button is-small" @click="startEditing">
        <span class="icon is-large">
          <i class="fa-solid fa-pen-to-square fa-2x"></i>
        </span>
      </button>

      <input type="checkbox" v-model="task.done" @change="updateTask" style="width: 14px; height: 14px;" />
      <span class="ml-2">{{ task.done ? 'Done' : 'Not done' }}</span>
    </div>
  </div>
</template>

<script>
export default {
  name: 'Task',
  emits: ['update'],
  data() {
    return {
      editing: false
    };
  },
  props: {
    task: {
      type: Object,
      required: true,
    },
  },
  methods: {
    startEditing() {
      this.editing = true;
    },
    cancelEdit() {
      this.editing = false;
    },
    updateTask() {
      this.editing = false
      this.$emit('update', this.task)
    }
  }
}
</script>


<style scoped>
h1 {
  font-weight: 500;
  font-size: 2.6rem;
  position: relative;
  top: -10px;
}

h3 {
  font-size: 1.2rem;
}

.greetings h1,
.greetings h3 {
  text-align: center;
}

@media (min-width: 1024px) {

  .greetings h1,
  .greetings h3 {
    text-align: left;
  }
}
</style>
