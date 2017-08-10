<footer id="footer" role="footer" class="cf">
    <?php include_once('footer-nav.php'); ?>
    <div class="contact">
        <h6 class="footer-utility-contact-group-header">contact</h6>
        <span class="footer-utility-contact-item item2"><?php echo hide_email('gabe@gabeneri.com'); ?></span>
    </div>
    <div class="social-wrap">
        <a href="https://www.facebook.com"><img class="fb" src="images/fb.png" alt="Facebook"/></a>
        <a href="https://www.twitter.com"><img class="tw" src="images/tw.png" alt="Twitter"/></a>
        <a href="https://www.instagram.com"><img class="ig" src="images/ig.png" alt="Instagram"/></a>
    </div>
    <a href="http://localhost/neri_gabe_portfolio/sitemap.php"><p>Sitemap</p></a>
    <small>&copy; 2017 GabeNeri.com | <?php echo hide_email('gabe@gabeneri.com'); ?></small>
</footer>
<!-- jQuery goes here -->
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<!-- jQuery plugins go here -->
<script>

</script>
</div>
</body>
</html>
<?php
//end the open DB connection
$db->close();
?>
