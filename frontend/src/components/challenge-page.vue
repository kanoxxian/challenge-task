<template>
  <div>
    <h1>Welcome to the Challenge Page!</h1>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  name: "challenge-page",
  mounted() {
    try {
      const response = axios.get('http://localhost/index.php');
      console.log(response.data);
    } catch (error) {
      console.error(error);
    }
  }
}
</script>

<style scoped>
h1 {
  color: #42b983;
}
</style>