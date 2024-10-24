<!-- <template>
  <h1>Vue Template</h1>
</template> -->

<script setup>
import { ref } from "vue";

const status = ref("Active");
const name = ref("Deep");

const handleClick = () => {
  if (status.value === "Active") {
    status.value = "Inactive";
  } else {
    status.value = "Active";
  }
  console.log(status.value);
};
</script>
<template>
  <h1>{{ name }}</h1>
  <h1>{{ status }}</h1>
  <button @click="handleClick">Click Me</button>
</template>
