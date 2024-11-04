<script setup>
const props = defineProps({
  name: {
    type: String,
  },
  age: {
    type: Number,
  },
});
</script>
<template>
  <h1>Hello {{ props.name }}</h1>
  <h1 v-if="props.age">Hello {{ props.age }}</h1>
</template>
