<?php
// The hfooter file
?>

<footer>
    <div class="footer-container">
        <div class="footer-content">
            <!-- Footer columns (could be links, copyright, etc.) -->
            <div class="footer-section">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h4>Company</h4>
                <ul>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="privacy.php">Privacy Policy</a></li>
                    <li><a href="terms.php">Terms of Service</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h4>Support</h4>
                <ul>
                    <li><a href="faq.php">FAQs</a></li>
                    <li><a href="support.php">Support Center</a></li>
                    <li><a href="contact.php">Get in Touch</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h4>Contact Us</h4>
                <p>Email: <a href="mailto:<?php echo ADMIN_EMAIL; ?>"><?php echo ADMIN_EMAIL; ?></a></p>
                <p>Phone: +1 800 123 4567</p>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> <?php echo SITE_NAME; ?>. All rights reserved.</p>
        </div>
    </div>
</footer>

<script src="assets/js/scripts.js"></script>
</body>
</html>