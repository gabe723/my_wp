<?php
$page = 'index';
require('db-config.php');
//use _once on function definitions to prevent duplicates
include_once('functions.php');
//get the doctype and the header element
include_once('header.php');
//extract and sanitize the keywords that the user is searching for
?>
<main id="content" class="cf">
    <section id="atf_<?php echo $page; ?>_cta1">
        <img class="a" src="images/logo.png" alt="Gabe Neri Designer">
        <p>My name is Gabe and I'm a UX/UI, Web, Graphic, and Multimedia designer.</p>
        <a href="work.php" target="_blank" rel="no-opener">
            <div class="cta-button">View Work
                <div>
        </a>
    </section>
</main>
<?php
//get the footer element and close the open body and html tags
include_once('footer.php');
?>
