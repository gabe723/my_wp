<?php
$page = 'about';
require('db-config.php');
//use _once on function definitions to prevent duplicates
include_once('functions.php');
//get the doctype and the header element
include_once('header.php');
?>
<!-- Call to Action -->
<section id="atf-<?php echo $page; ?>-cta1">
    <div class="cta">
        <h2>the leader in event planning</h2>
    </div>
</section>
<main id="content">
    <!-- About -->
    <section id="<?php echo $page; ?>">
        <div class="<?php echo $page; ?>-wrap">
            <h2>Who am I?</h2>
            <h3>I'm a BAMF haha</h3>
            <p>I design experiences. I've always been interested in how things work. In how we as humans interact with
                our enviorment. This curiosity mixed with my love for technology has propelled me in the direction of
                experience design. I'm in love and there's no going back. I'm dedicated to what I do and will work with
                whatever I have to make the best expereince possible for the user. When I'm not coding or designing I
                can usually be found getting lost(on purpose) on my Harley. Life is good.</p>
        </div>
    </section>
</main>
<?php
//get the footer element and close the open body and html tags
include_once('footer.php');
?>
