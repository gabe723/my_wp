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
</div>
<main id="content">
    <!-- About -->
    <section id="<?php echo $page; ?>">
        <div class="<?php echo $page; ?>-wrap">
            <h2>about</h2>
            <h3>the journey here</h3>
            <p>What started out as a few friends putting on parties has evolved into a widespread bussiness of creating
                the best event experience money can buy.</p>
        </div>
    </section>
</main>
<?php
//get the footer element and close the open body and html tags
include_once('footer.php');
?>
