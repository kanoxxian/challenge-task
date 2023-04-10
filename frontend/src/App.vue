<template>
  <div id="app">
    <h1>Welcome to the Challenge Page!</h1>
    <nav>
      <router-link to="/">Home</router-link> |
      <router-link to="/challenge-page">Challenge Page</router-link> |
      <router-link to="/form">Form</router-link>  |
      <router-link to="/table">User Table</router-link>
    </nav>
    <router-view />
    <usertable></usertable>
  </div>
</template>

<script>
import usertable from "./components/table2.vue"

export default {
  name: "App",
  components: {
    usertable: usertable
  }
};
</script>

<style>
#app {
  background: #12233a;
  padding: 0;
  margin: 0;
  height: 100%;
  width: 100%;
}

nav {
  display: flex;
  padding: 20px;
  margin: auto;
  font-size: 24px;
  color: whitesmoke;
  align-items: center;
  justify-content: center;
  margin-bottom: 2em;
}

nav a{
  font-size: 24px;
  color: whitesmoke;
  padding: 5px;
}

h1 {
  color: whitesmoke;
  text-align: center;
  padding: 1em;
  font-size: 48px;
}
</style>