<script setup>
import { onMounted, ref, watch } from "vue";

let count = ref(0);
let desc = ref("");
const increment = () => {
  count.value++;
};

const decrement = () => {
  count.value--;
};

watch(count, (newCount, oldCount) => {
  desc = `count is changed from ${oldCount} to  ${newCount}`;
});
</script>

<template>
  <div class="">
    Count : {{ count }}
    <br />
    <button @click="increment">Increment</button> <br />
    <button @click="decrement">Decrement</button>

    <p>{{ desc }}</p>
  </div>
</template>
