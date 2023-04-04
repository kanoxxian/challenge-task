<template>
  <div class="challenge-page">
    <div class="response-section">
      <label for="getResponse">GET Response:</label>
      <section id="getResponse" v-text="getResponse"></section>
      <button @click="getMethodTest">Test GET</button>
    </div>
    <div class="response-section">
      <label for="postResponse">POST Response:</label>
      <section id="postResponse" v-text="postResponse"></section>
      <button @click="postMethodTest">Test POST</button>
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
    getMethodTest() {
      try {
        axios.get('http://localhost/index.php?test=1').then(response => {
          this.getResponse = response.data;
        });
      } catch (error) {
        console.error(error);
      }
    },
    postMethodTest() {
      try {
        axios.post('http://localhost/index.php', {
          testData: 'test',
        })
            .then(response => {
              this.postResponse = response.data;
            })
            .catch(error => {
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

.buttons button {
  /*padding: 10px;*/
  height: 2em;
  width: 20em;
}

.responses textarea {
  flex-grow: 1;
}
</style>