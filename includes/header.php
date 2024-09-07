<?php
// The header file
// Include the configuration file
// require_once 'config/config.php';

// Ensure these variables are set by the template
$page_title = isset($page_title) ? htmlspecialchars($page_title) . ' | ' . SITE_NAME : 'Default Title | ' . SITE_NAME;
//$page_title = isset($page_title) ? htmlspecialchars($page_title) : 'Default Title';
$page_description = isset($page_description) ? htmlspecialchars($page_description) : 'Default description.';
$page_keywords = isset($page_keywords) ? htmlspecialchars($page_keywords) : 'default, keywords';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $page_description; ?>">
    <meta name="keywords" content="<?php echo $page_keywords; ?>">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>

<?php
// Include Navigation Bar
require_once 'navbar.php';
?>

