<?php
// config.php

// Database configuration
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'yoga');

// Site configuration
define('SITE_NAME', 'My Demo Site');
define('BASE_URL', 'http://localhost/test');

// Other configurations
define('ADMIN_EMAIL', 'admin@yourdomain.com');

// Error reporting (for development, you might want to enable this)
// error_reporting(E_ALL);
// ini_set('display_errors', 1);

// Database connection function
function db_connect() {
    $conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}
?>
