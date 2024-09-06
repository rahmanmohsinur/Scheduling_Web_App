
<?php
//require_once 'config/config.php';

// Define meta tags for the about page
$page_title = 'About Us';
$page_description = 'Learn more about My Demo Site, our mission, and our team.';
$page_keywords = 'about us, company info, team';

require 'includes/header.php';
?>



<div class="container">
    <h1><?php echo $page_title; ?></h1>
    <p><?php echo $page_description; ?></p>
</div>


<?php require 'includes/footer.php';?>