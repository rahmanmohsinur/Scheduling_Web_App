<?php
require_once 'config/config.php'; // Load configuration
require_once 'includes/functions.php'; // Load functions

// Get the requested route
$route = isset($_GET['route']) ? $_GET['route'] : '';

// Basic Routing Logic
switch ($route) {
    case '':
        require 'templates/home.php';
        break;
    
    case 'about':
        require 'templates/about.php';
        break;

    case 'services':
        require 'templates/services.php';
        break;

    case 'contact':
        require 'templates/contact.php';
        break;

    case 'booking':
        require 'templates/booking.php';
        break;

    case 'todo':
        require 'templates/todo.php';
        break;

    default:
        // Load a 404 page if the route doesn't match any case
        require 'templates/404.php';
        break;
}
?>
