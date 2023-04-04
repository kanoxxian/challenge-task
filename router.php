<?php
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$filePath = __DIR__ . $path;

// If the requested file exists, serve it
if (file_exists($filePath) && is_file($filePath)) {
    return false;
} else {
    // Otherwise, serve index.html
    readfile(__DIR__ . '/index.html');
}