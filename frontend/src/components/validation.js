const form = document.querySelector('#test-form');
const emailInput = document.querySelector('#email');
const emailError = document.querySelector('#email-error');

// Regular expression for email validation
const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

form.addEventListener('submit', function(e) {
  e.preventDefault(); // prevent form submission

  // Validate email address
  if (!emailRegex.test(emailInput.value)) {
    emailError.textContent = 'Please enter a valid email address';
    emailInput.classList.add('is-invalid');
  } else {
    emailError.textContent = '';
    emailInput.classList.remove('is-invalid');
    // Submit the form if all fields are valid
    form.submit();
  }
});

// Remove validation error message when user starts typing
emailInput.addEventListener('input', function() {
  emailError.textContent = '';
  emailInput.classList.remove('is-invalid');
});