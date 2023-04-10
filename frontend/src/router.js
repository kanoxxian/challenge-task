import Vue from "vue";
import VueRouter from "vue-router";
import NewPage from "./components/challenge-page.vue";
import FormPage from "./components/form.vue";
import TablePage from "./components/table2.vue";

Vue.use(VueRouter);

const routes = [
  {
    path: "/challenge-page",
    name: "NewPage",
    component: NewPage,
  },
  {
    path: "/form",
    name: "FormPage",
    component: FormPage,
  },
  {
    path: "/table",
    name: "TablePage",
    component: TablePage,
  }
]; 

const router = new VueRouter({
  mode: "history",
  base: process.env.BASE_URL,
  routes,
});

export default router;