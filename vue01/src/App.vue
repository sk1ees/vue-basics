<!-- <template>
  <h1>Vue Template</h1>
</template> -->

<script>
export default {
  data() {
    return {
      name: "Deep Sarkar",
      isActive: true,
      task: ["deep", "aditya", "preeti", "rohit"],
      link: "https://google.com",
      ytLink: "https://youtube.com",
    };
  },
  methods: {
    clickMe() {
      this.isActive = !this.isActive;
    },
  },
};
</script>
<template>
  <div class="">
    <h1>{{ name }}</h1>
    <p v-if="isActive">User is Active</p>
    <p v-else>User is Inactive</p>
    <button @click="clickMe">Click me</button>
    <ul>
      <li v-for="tasks in task" :key="tasks">{{ tasks }}</li>
    </ul>
    <a v-bind:href="link">Click for Google</a>
    <a :href="ytLink">Click for Youtube</a>
    <!-- <button>Click Me</button> -->
  </div>
</template>
