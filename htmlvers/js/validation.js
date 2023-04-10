function validateForm() {
  const firstnameInput = document.getElementById('firstname');
  const lastnameInput = document.getElementById('lastname');
  const emailInput = document.getElementById('email');
  const firstname = firstnameInput.value.trim();
  const lastname = lastnameInput.value.trim();
  const email = emailInput.value.trim();

  // check if any of the inputs are empty
  if (firstname === '' || lastname === '' || email === '') {
    alert('Please fill in all fields.');
    return false;
  }

  // check if the email is valid
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!emailRegex.test(email)) {
    alert('Please enter a valid email address.');
    return false;
  }

  // all inputs are valid
  return true;
}

const form = document.getElementById('add-user-form');

form.addEventListener('submit', (event) => {
  event.preventDefault();

  // Get the form data
  const formData = new FormData(form);

  // Send a POST request to the server-side script
  const xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function() {
    if (this.readyState === 4 && this.status === 200) {
      // Display a success message to the user
      alert(this.responseText);

      // Reset the form
      form.reset();
    } else if (this.readyState === 4 && this.status !== 200) {
      // Display an error message to the user
      alert('An error occurred while adding the user.');
    }
  };
  xhr.open('POST', 'add-user.php');
  xhr.send(formData);
});