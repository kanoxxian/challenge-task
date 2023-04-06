<?php
require_once __DIR__ . '/../vendor/autoload.php';
// Check if the request is a POST request
use App\RequestHandler;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the request data
    $data = RequestHandler::post();

    // Your logic to handle the POST request
    // For example, you can save the data to a database or process it in some way

    header('Content-Type: application/json');
    echo json_encode([
        'status' => 'success',
        'message' => 'Data processed successfully',
        'data' => $data
    ]);
} else if($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Your logic to handle the GET request
    $data = RequestHandler::get();

    header('Content-Type: application/json');
    echo json_encode([
        'status' => 'success',
        'message' => 'Data processed successfully',
        'data' => $data
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