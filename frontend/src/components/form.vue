<template>
  <div class="form-container">
    <form @submit.prevent="validateForm" class="form">
      <div class="input-container">
        <label for="first-name" class="label">First Name:</label>
        <input type="text" id="first-name" v-model="firstName" class="input">
      </div>
      <div class="input-container">
        <label for="last-name" class="label">Last Name:</label>
        <input type="text" id="last-name" v-model="lastName" class="input">
      </div>
      <div class="input-container">
        <label for="email" class="label">Email:</label>
        <input type="email" id="email" v-model="email" class="input email-input">
      </div>
      <button type="submit" class="button" formnovalidate>Submit</button>
    </form>
    <p v-if="error" class="error">{{ error }}</p>
  </div>


</template>

<style scoped>
.form-container {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

.form {
  display: flex;
  flex-direction: column;
  align-items: center;
  width: 100%;
  max-width: 500px;
  padding: 20px;
  background-color: #fcfbfd;
  border-radius: 10px;
}

.input-container {
  display: flex;
  flex-direction: column;
  width: 100%;
  margin-bottom: 20px;
}

.label {
  font-family: Arial;
  font-size: 16px;
  color: #bcb9b4;
  margin-bottom: 5px;
}

.input {
  font-family: Arial;
  font-size: 16px;
  padding: 10px;
  border: 2px solid #bcb9b4;
  border-radius: 5px;
  width: 100%;
  box-sizing: border-box;
  transition: border-color 0.5s ease-in-out;
}

.input:focus {
  outline: none;
  border-color: #53b5c4;
}

.email-input {
  width: 100%;
}

.button {
  font-family: Arial;
  font-size: 16px;
  padding: 10px;
  background-color: #601f70;
  color: #fff;
  border: none;
  border-radius: 5px;
  width: 100%;
  margin-top: 10px;
}

.error {
  width: 300px;
  height: 50px;
  margin-top: 20px;
  padding-top: 15px;
  border: 2px solid red;
  background-color: rgb(156, 55, 89);
  text-align: center;
  font-family: Arial, Helvetica, sans-serif;
  font-size: 20px;
  color: #fff;
}
</style>

<script>
export default {
  data() {
    return {
      firstName: '',
      lastName: '',
      email: '',
      error: ''
    };
  },
  methods: {
    validateForm() {
      // Check if first name is empty
      if (!this.firstName.trim()) {
        this.error = 'First name is required';
        return;
      }
      
      // Check if last name is empty
      if (!this.lastName.trim()) {
        this.error = 'Last name is required';
        return;
      }
      
      // Check if email is valid
      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailRegex.test(this.email)) {
        this.error = 'Invalid email address';
        return;
      }
      
      // If all validations pass, submit the form
      this.submitForm();
    },
    submitForm() {
      // Submit the form logic here
      console.log('Form submitted successfully');
    }
  }
}
</script>