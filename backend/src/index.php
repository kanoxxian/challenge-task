<?php
require_once __DIR__ . '/../vendor/autoload.php';
// Check if the request is a POST request
use App\RequestHandler;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the request data
    $data = json_decode(file_get_contents('php://input'));

    if (empty($data->action)) {
        throw new Exception('Action not defined');
    }

    $action = $data->action;

    switch ($action) {
        case 'updateUsers':
            $response = RequestHandler::getUsers();
            break;
        default:
            $response = RequestHandler::post($data);
            break;
    }

    // Your logic to handle the POST request
    // For example, you can save the data to a database or process it in some way

    header('Content-Type: application/json');
    echo json_encode([
        'status' => 'success',
        'message' => 'Data processed successfully',
        'data' => $response
    ]);
} else if($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Your logic to handle the GET request
    if (empty($_GET['action'])) {
        throw new Exception('Action not defined');
    }

    $action = $_GET['action'];

    switch ($action) {
        case 'getUsers':
            $response = RequestHandler::getUsers();
            break;
        default:
            $response = RequestHandler::get();
            break;
    }

    header('Content-Type: application/json');
    echo json_encode([
        'status' => 'success',
        'message' => 'Data processed successfully',
        'data' => $response
    ]);
} else {
    // Return an error response for non-POST requests
    header('Content-Type: application/json');
    http_response_code(400);
    echo json_encode([
        'status' => 'error',
        'message' => 'Invalid request method'
    ]);
}