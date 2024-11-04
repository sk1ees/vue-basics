<script setup>
import { ref } from "vue";
import Button from "./Button.vue";

let status = ref(false);
const handleFunc = () => {
  status.value = !status.value;
};
</script>

<template>
  <Button @buttonClickHochukaHai="handleFunc" />
  <p v-if="status">Button has been clicked</p>
</template>
