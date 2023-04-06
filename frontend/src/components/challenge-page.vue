<template>
  <div class="challenge-page">
    <div class="response-section">
      <label for="getResponseExample">GET Response:</label>
      <section id="getResponseExample" v-text="getResponseExample"></section>
      <button @click="getMethodExample">Example GET</button>
    </div>
    <div class="response-section">
      <label for="postResponseExample">POST Response:</label>
      <section id="postResponseExample" v-text="postResponseExample"></section>
      <button @click="postMethodExample">Example POST</button>
    </div>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  name: "challenge-page",
  data() {
    return {
      getResponseExample: null,
      postResponseExample: null
    }
  },
  methods: {
    getMethodExample() {
      try {
        axios.get('http://localhost/index.php?action=test').then(response => {
          this.getResponseExample = response.data.data;
        });
      } catch (error) {
        console.error(error);
      }
    },
    postMethodExample() {
      try {
        axios.post('http://localhost/index.php', {
          action: 'test',
          dataForAction: {}
        }).then(response => {
          this.postResponseExample = response.data.data;
        }).catch(error => {
          console.log(error);
        });
      } catch (error) {
        console.error(error);
      }
    }
  }
}
</script>

<style scoped>
h1 {
  color: whitesmoke;
}

.challenge-page {
  display: flex;
  flex-direction: column;
  gap: 2em;
}

.response-section {
  width: 50%;
  margin: auto;
  display: flex;
  flex-direction: column;
  gap: 1em;
  color: whitesmoke;
}

.response-section button {
  /*padding: 10px;*/
  height: 2em;
  width: 10em;
}

.response-section label {
  /*padding: 10px;*/
  font-size: 20px;
  font-weight: bold;
}

.response-section section {
  flex-grow: 1;
}
</style>