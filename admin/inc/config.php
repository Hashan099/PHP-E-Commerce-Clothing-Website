<?php
// Error Reporting Turn On
ini_set('error_reporting', E_ALL);

// Setting up the time zone
date_default_timezone_set('America/Los_Angeles');

// Host Name
$dbhost = getenv('DB_HOST') ?: 'localhost';

// Database Name
$dbname = getenv('DB_NAME') ?: 'celeneclothing';

// Database Username
$dbuser = getenv('DB_USER') ?: 'root';

// Database Password
$dbpass = getenv('DB_PASS') !== false ? getenv('DB_PASS') : '';

// Defining base url
if (!defined("BASE_URL")) {
    $envBaseUrl = getenv('BASE_URL');
    if ($envBaseUrl !== false && $envBaseUrl !== '') {
        define("BASE_URL", rtrim($envBaseUrl, '/') . '/');
    } else {
        define("BASE_URL", "");
    }
}

// Getting Admin url
if (!defined("ADMIN_URL")) {
    define("ADMIN_URL", BASE_URL . "admin/");
}

try {
    $pdo = new PDO("mysql:host={$dbhost};dbname={$dbname};charset=utf8", $dbuser, $dbpass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch( PDOException $exception ) {
    echo "Connection error :" . $exception->getMessage();
}