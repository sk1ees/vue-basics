<script setup>
import { ref } from "vue";

let imgData = ref([]);

const handleApi = async () => {
  await fetch("https://picsum.photos/v2/list")
    .then((response) => response.json())
    .then((data) => {
      imgData.value = data;
      console.log(imgData);
    });
};
</script>

<template>
  <div class="text-center">
    Welcome to the Api Picsum <br />
    <button @click="handleApi" class="bg-blue-500 mt-3 px-2 py-1 rounded-lg">
      Get Images
    </button>

    <div class="grid grid-cols-3">
      <img
        v-for="item in imgData"
        :src="item.download_url"
        :key="item.id"
        alt=""
      />
    </div>
  </div>

  <!-- <img
    src="https://fastly.picsum.photos/id/1/5000/3333.jpg?hmac=Asv2DU3rA_5D1xSe22xZK47WEAN0wjWeFOhzd13ujW4"
    alt=""
    width="200"
    height="200"
  /> -->
</template>
