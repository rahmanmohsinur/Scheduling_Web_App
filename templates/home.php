
<?php
//require_once 'config/config.php';

// Define meta tags for the home page
$page_title = 'Home';
$page_description = 'Welcome to the homepage of Your Site Name. Discover our services and offerings.';
$page_keywords = 'home, main page, services, offerings';

require_once 'includes/header.php';
?>



<div class="container">
    <h1><?php echo $page_title; ?></h1>
    <p><?php echo $page_description; ?></p>
</div>



<?php require_once 'includes/footer.php';?>