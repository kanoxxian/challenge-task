<?php
$host = 'localhost';
$port = 3000;

echo "Starting server at http://{$host}:{$port}" . PHP_EOL;

// Run the built-in PHP web server with the router script
$command = "php -S {$host}:{$port} -t " . __DIR__ . " " . __DIR__ . "/router.php";
passthru($command);