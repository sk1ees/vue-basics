<script setup>
import { ref } from "vue";

const apiData = ref([]);

const handleApi = () => {
  fetch("https://jsonplaceholder.typicode.com/todos")
    .then((response) => response.json())
    .then((data) => {
      apiData.value = data;
      console.log(apiData);
    });
};
</script>

<template>
  <button @click="handleApi">Click Me</button>

  <ul v-for="item in apiData">
    <li>{{ item.id }} : {{ item.title }}</li>
    <li></li>
  </ul>
</template>
