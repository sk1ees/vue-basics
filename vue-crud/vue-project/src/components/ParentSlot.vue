<script setup>
import ChildSlot from "./ChildSlot.vue";
</script>

<template>
  <ChildSlot v-slot:rightSlot>
    <p>This is some custom content for the top slot!</p>
  </ChildSlot>
  <ChildSlot v-slot:bottomSlot>
    <p>This is some custom content for the top slot!</p>
  </ChildSlot>
</template>
