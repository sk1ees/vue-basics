import Navbar from "@/components/Navbar.vue";
import Counter from "@/views/Counter.vue";
import HomeView from "@/views/HomeView.vue";
import ImageView from "@/views/ImageView.vue";
import ProductView from "@/views/ProductView.vue";
import { createRouter, createWebHistory } from "vue-router";

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: "/api",
      name: "root",
      component: HomeView,
    },
    {
      path: "/api/images",
      name: "image",
      component: ImageView,
    },
    {
      path: "/api/:id",
      name: "product",
      component: ProductView,
    },
    {
      path: "/counter",
      name: "counter",
      component: Counter,
    },
  ],
});
export default router;
