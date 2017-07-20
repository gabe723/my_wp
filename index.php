<?php
$page = 'index';
require('db-config.php');
//use _once on function definitions to prevent duplicates
include_once('functions.php');
//get the doctype and the header element
include_once('header.php');
//extract and sanitize the keywords that the user is searching for
?>
<!-- Above the Fold -->
<section id="atf_<?php echo $page; ?>_cta1">
    <h2>Experience(XP) Designer, Multimedia Guru</h2>
    <img class="" src="images/logo.png" alt="Gabe Neri Designer">
</section>


<main id="content" class="cf">
    <!-- Call to Action -->
    <section id="atf-<?php echo $page; ?>-cta2">
        <div class="cta">
            <h3>industry experience meets world-class service</h3>
            <p>We at Equip Events know the value of a successful event. With our team of experts you will never have to
                worry. Let us equip all your event needs.<a href="http://localhost/neri_gabe_equip_events/about.php"
                                                            class="cta-learn"> Learn more.</a></p>
        </div>
    </section>
</main>
<?php
//get the footer element and close the open body and html tags
include_once('footer.php');
?>
