<?php
  require_once ('Users.php');

  $errors = array(); // Initialize an array to store validation errors
  $success = ""; // Initialize a variable to store success message

  // Check if form is submitted
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate input data
    if (empty($_POST["firstname"])) {
      $errors[] = "First name is required";
    } else {
      $firstname = test_input($_POST["firstname"]);
      // Check if firstname only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z ]*$/",$firstname)) {
        $errors[] = "Only letters and white space allowed in first name";
      }
    }

    if (empty($_POST["lastname"])) {
      $errors[] = "Last name is required";
    } else {
      $lastname = test_input($_POST["lastname"]);
      // Check if lastname only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z ]*$/",$lastname)) {
        $errors[] = "Only letters and white space allowed in last name";
      }
    }

    if (empty($_POST["email"])) {
      $errors[] = "Email is required";
    } else {
      $email = test_input($_POST["email"]);
      // Check if email address is well-formed
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format";
      }
    }

    // If there are no errors, add the user to the array
    if (empty($errors)) {
      $id = count($users) + 1; // Generate ID for new user
      $newUser = array(
        "id" => $id,
        "firstname" => $firstname,
        "lastname" => $lastname,
        "email" => $email
      );
      array_push($users, $newUser); // Add new user to the array
      $success = "New user added successfully"; // Set success message
    }
  }

  // Helper function to sanitize input data
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>

<!-- Display validation errors, if any -->
<?php if (!empty($errors)): ?>
  <div style="color: red;">
    <?php foreach ($errors as $error): ?>
      <p><?php echo $error; ?></p>
    <?php endforeach; ?>
  </div>
<?php endif; ?>

<!-- Display success message, if any -->
<?php if (!empty($success)): ?>
  <div style="color: green;">
    <?php echo $success; ?>
  </div>
<?php endif; ?>
