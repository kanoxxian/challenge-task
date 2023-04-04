import Vue from "vue";
import VueRouter from "vue-router";
import NewPage from "./components/challenge-page.vue";

Vue.use(VueRouter);

const routes = [
  {
    path: "/challenge-page",
    name: "NewPage",
    component: NewPage,
  },
];

const router = new VueRouter({
  mode: "history",
  base: process.env.BASE_URL,
  routes,
});

export default router;