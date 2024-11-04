<script setup></script>

<template>
  <h3>Component</h3>
  <div>
    <slot name="topSlot">This is the default content for the top slot.</slot>
    <br />
    <slot name="bottomSlot"
      >This is the default content for the bottom slot.</slot
    >
    <br />
    <slot name="bottomSlot"
      >This is the default content for the bottom slot.</slot
    >
    <br />
    <slot name="rightSlot"
      >This is the default content for the bottom slot.</slot
    >
  </div>
</template>
