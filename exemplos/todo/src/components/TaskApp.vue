<template>
  <div v-for="task in tasks" :key="task.id">
    <Task :task="task" @update="updateTask(task)" />
  </div>
</template>

<script>

import Task from './Task.vue';

export default {
  components: { Task },
  data() {
    return {
      tasks: []
    };
  },
  methods: {
    updateTask(updatedTask) {
      const index = this.tasks.findIndex(task => task.id === updatedTask.id);
      if (index !== -1) {
        this.tasks.splice(index, 1, updatedTask);
      }
    }
  },
  beforeMount() {
    fetch('https://gist.githubusercontent.com/rodrigoprestesmachado/15cb1d294f92554b1968ccc15a079293/raw/079ee6d0ec7b6f0ae946f7cb5ca7e143337f1cc8/tasks.json')
      .then(response => response.json())
      .then(data => {
        console.log(data);
        this.tasks = data;
      })
      .catch(error => {
        console.error('Error to retrieve the tasks:', error);
      });
  }
};
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
