<?php

$userlist = array(
  array(
    "id" => 1,
    "first_name" => "John",
    "last_name" => "Doe",
    "email" => "johndoe@example.com"
  ),
  array(
    "id" => 2,
    "first_name" => "Jane",
    "last_name" => "Doe",
    "email" => "janedoe@example.com"
  ),
  array(
    "id" => 3,
    "first_name" => "Bob",
    "last_name" => "Smith",
    "email" => "bobsmith@example.com"
  )
);

function add_user($first_name, $last_name, $email) {
  global $userlist;
  
  // Validate input data
  if (empty($first_name) || empty($last_name) || empty($email)) {
    return array("success" => false, "message" => "Please provide first name, last name, and email");
  }
  
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    return array("success" => false, "message" => "Invalid email address");
  }
  
  // Generate a unique ID for the new user
  $id = max(array_column($userlist, 'id')) + 1;
  
  // Add the new user to the array
  $user = array(
    "id" => $id,
    "first_name" => $first_name,
    "last_name" => $last_name,
    "email" => $email
  );
  
  $userlist[] = $user;
  
  return array("success" => true, "message" => "User added successfully");
}

?>