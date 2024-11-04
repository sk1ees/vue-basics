<script setup>

import { defineEmits } from 'vue';


let emit = defineEmits();


function handleButtonClick(){
    emit("buttonClickHochukaHai")
}

</script>

<template>
  <button @click="handleButtonClick">Click Me</button>
</template>
