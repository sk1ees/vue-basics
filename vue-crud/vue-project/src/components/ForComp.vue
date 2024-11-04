<script setup>
import Greeting from "./Greeting.vue";

let list = ["deep", "anurag"];
</script>

<template>
  <Greeting v-for="item in list" :name="item" />
</template>
