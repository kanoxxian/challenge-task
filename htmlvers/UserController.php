<?php
// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  // Get the POST data and sanitize it
  $firstname = filter_var($_POST['firstname'], FILTER_UNSAFE_RAW);
  $lastname = filter_var($_POST['lastname'], FILTER_UNSAFE_RAW);
  $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

  // Validate the input
  if (!($firstname && $lastname && $email)) {
    http_response_code(400);
    echo json_encode(['error' => 'Invalid input data']);
    exit;
  }

  // Create a new user object
  $user = new stdClass();
  $user->firstname = $firstname;
  $user->lastname = $lastname;
  $user->email = $email;

  // Add the user to the array of users
  $data = json_decode(file_get_contents('users.json'), true);
  $data['users'][] = $user;
  file_put_contents('users.json', json_encode($data));

  // Return a success message
  http_response_code(200);
  echo json_encode(['message' => 'User added successfully']);
  exit;

} else {
  http_response_code(405);
  echo json_encode(['error' => 'Invalid request method']);
  exit;
}