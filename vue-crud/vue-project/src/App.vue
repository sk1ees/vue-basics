<script setup>
import { ref } from "vue";
import Navbar from "./components/Navbar.vue";
import Status from "./components/Status.vue";
import Task from "./components/Task.vue";
import ChangeColor from "./components/ChangeColor.vue";
import Vmodel from "./components/Vmodel.vue";
import Greeting from "./components/Greeting.vue";
import ForComp from "./components/ForComp.vue";
import ButtonComp from "./components/ButtonComp.vue";
import FruitParent from "./components/FruitParent.vue";
import ParentSlot from "./components/ParentSlot.vue";
import NavbarLink from "./components/NavbarLink.vue";
import ApiReq from "./components/Https/ApiReq.vue";
import ImageApi from "./components/Https/ImageApi.vue";
import { RouterView } from "vue-router";
let showButton = false;

let className = "bg-black";
let link = "https://www.google.com/";
let url =
  "https://imgs.search.brave.com/CxmJips-xOB_QWNo21Tn5RV-3kF8U88qRbek0wHmwRQ/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9pbWFn/ZWpvdXJuYWwub3Jn/L3dwLWNvbnRlbnQv/dXBsb2Fkcy8yMDI0/LzEwL0lzc3VlLTEy/Mi1TaGVyaWRhbl9Q/YWdlXzA4NV9JbWFn/ZV8wMDAxLXNjYWxl/ZC5qcGc";

let color = "red";
</script>

<template>
  <!-- <Navbar />
  <Status />
  <Task />

  <ChangeColor />

  <img :src="url" alt="" width="300" height="300" />

  <a :href="link">Click here</a>

  <p :class="className">Hello im {{ color }}</p>

  <button v-show="showButton" class="px-2 py-3 bg-blue-500">
    Show the button
  </button> -->

  <!-- <Vmodel /> -->

  <!-- <Greeting name="Deep" age=35 /> -->
  <!-- <ForComp /> -->
  <!-- 
  <ButtonComp /> -->

  <!-- <FruitParent /> -->
  <!-- <ParentSlot /> -->
  <!-- <NavbarLink /> -->

  <!-- <ApiReq /> -->
  <!-- <ImageApi /> -->
  <RouterView />
</template>
