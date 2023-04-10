<?php

require_once('Users.php');

$users = new \App\Users();
$data = $users->getUsers();

header('Content-Type: application/json');
echo json_encode($data);