<script setup>
import Hero from "./components/Hero.vue";
import HomeCards from "./components/HomeCards.vue";
import JobListings from "./components/JobListings.vue";
import Navbar from "./components/Navbar.vue";
</script>

<template>
  <Navbar />
  <Hero title="Hello this is Prop" />
  <HomeCards />

  <JobListings :limit="3" :showButton="true"/>

</template>
