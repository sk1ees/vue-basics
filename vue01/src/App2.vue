<!-- <template>
  <h1>Vue Template</h1>
</template> -->

<script setup>
import { ref } from "vue";

const status = ref("Active");
const name = ref("Deep");
const tasks = ref([]);
const formHandle = ref("");
const handleClick = () => {
  if (status.value === "Active") {
    status.value = "Inactive";
  } else {
    status.value = "Active";
  }
  console.log(status.value);
};
const addTask = () => {
  tasks.value.push(formHandle.value);
  formHandle.value = "";
};
</script>

<template>
  <!-- <h1>{{ name }}</h1>
  <h1>{{ status }}</h1>
  <button @click="handleClick">Click Me</button> -->

  <form @submit.prevent="addTask">
    <label for="textInput">Create your TODO List</label><br />
    <input type="text" id="textInput" v-model="formHandle" /><br />
    <input type="submit" value="Add Item" />
  </form>
  <br />
  <ul v-for="task in tasks">
    <li>{{ task }}</li>
  </ul>
</template>
