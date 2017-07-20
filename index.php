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
    <h2>We Equip Events With <span>EVERYTHING!</span></h2>
</section>
<section id="icon-cta">
    <h2>plan. equip. celebrate.</h2>
    <div id="icon-wrap">
        <a href="http://localhost/neri_gabe_equip_events/planning.php">
            <div class="icon-wrap"><img class="icon icon1" src="images/planning_icon.png" alt="Planning"/>
                <p>plan</p></div>
        </a>
        <a href="http://localhost/neri_gabe_equip_events/products.php">
            <div class="icon-wrap"><img class="icon icon2" src="images/equipment_icon.png" alt="Equip"/>
                <p>equip</p></div>
        </a>
        <a href="http://localhost/neri_gabe_equip_events/index.php#tmnls">
            <div class="icon-wrap"><img class="icon icon3" src="images/experience_icon.png" alt="Celebrate"/>
                <p>celebrate</p></div>
        </a>
    </div>
</section>
</div>
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
