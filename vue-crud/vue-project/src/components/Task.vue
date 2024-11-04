<script setup>
let tasks = ["task-1", "task-2", "task-3"];
</script>
<template>
  <div class="">
    <h1>Tasks</h1>

    <ul>
      <li v-for="task in tasks">
        {{ task }}
      </li>
    </ul>
  </div>
</template>
