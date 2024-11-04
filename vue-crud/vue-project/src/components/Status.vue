<script setup>
import { ref } from 'vue';

let name = "Deep Sarkar";
let status = ref(true);
function handleClick() {
  status.value = !status.value;
  console.log(status);
}
</script>

<template>
  <h1>{{ name }}</h1>
  <div class="flex gap-5">
    <p v-if="status">User is Active</p>
    <p v-else>User is Inactive</p>
    <button
      @click="handleClick()"
      class="bg-blue-500 p-2 rounded-lg text-white"
    >
      Change the status
    </button>
  </div>
</template>
