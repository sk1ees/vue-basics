<script setup>
import FruitChiild from "./FruitChiild.vue";

function handleClick() {
  alert("Reading..");
}
</script>

<template>
  <FruitChiild @readMore="handleClick()" />
</template>
