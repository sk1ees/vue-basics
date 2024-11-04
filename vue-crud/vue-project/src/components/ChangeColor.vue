<script setup>
import { ref } from "vue";

let color = ref(true);

function handleClick() {
  color.value = !color.value;
}
</script>

<template>
  <div
    @click="handleClick()"
    :class="[
      'rounded-full',
      'w-44',
      'h-44',
      color ? 'bg-red-500' : 'bg-yellow-500',
    ]"
  ></div>
</template>
