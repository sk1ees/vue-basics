<script setup>
let list = ["Grapes", "Apple", "Banana", "Onion"];

let emit = defineEmits();

const handleClick = () => {
  emit("readMore");
};
</script>

<template>
  <ul v-for="item in list">
    <li>{{ item }}</li>
    <button @click="handleClick" class="px-2 py-3 bg-gray-200">
      Read More
    </button>
  </ul>
</template>
