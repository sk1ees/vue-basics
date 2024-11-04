<script setup>
import { ref } from "vue";
import About from "./NavLinks/About.vue";
import Home from "./NavLinks/Home.vue";
import Service from "./NavLinks/Service.vue";

let currentComponent = ref("Home");
</script>

<template>
  <button @click="currentComponent = Home">Home</button>
  <button @click="currentComponent = About">About</button>
  <button @click="currentComponent = Service">Services</button>

  <component :is="currentComponent" />
</template>
