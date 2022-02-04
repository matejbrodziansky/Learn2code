import { createRouter, createWebHistory, RouteRecordRaw } from "vue-router";


//view
import Home from "../views/Home.vue";
import About from "../views/About.vue";
import Tunes from "../views/Tunes.vue";

const routes: Array<RouteRecordRaw> = [
  {
    path: "/",
    name: "Home",
    component: Home,
  },
  {
    path: "/tunes",
    name: "tunes",
    component: Tunes,
  },
  {
    path: "/about",
    name: "about",
    component: About,
  },

];

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes,
});

export default router;
