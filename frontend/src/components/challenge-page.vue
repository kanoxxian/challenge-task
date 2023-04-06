<template>
  <div class="challenge-page">
    <div class="response-section">
      <label for="getResponse">GET Response:</label>
      <section id="getResponse" v-text="getResponse"></section>
      <button @click="getMethodExample">Example GET</button>
    </div>
    <div class="response-section">
      <label for="postResponse">POST Response:</label>
      <section id="postResponse" v-text="postResponse"></section>
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
      getResponse: null,
      postResponse: null
    }
  },
  methods: {
    getMethodExample() {
      try {
        axios.get('http://localhost/index.php?test=1').then(response => {
          this.getResponse = response.data.data;
        });
      } catch (error) {
        console.error(error);
      }
    },
    postMethodExample() {
      try {
        axios.post('http://localhost/index.php', {
          testData: 'test',
        }).then(response => {
          this.postResponse = response.data.data;
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