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
        <p class="intro">I'm Gabe and I'm a UX Web, Graphic, and Multimedia designer.</p>
        <a href="http://localhost/neri_gabe_portfolio/index#work.php" target="_blank" rel="no-opener">
            <div class="cta-button">View Work
                <div>
        </a>
    </section>
    <section id="about">
        <div class="about-wrap">
            <h2>Who Am I Even?</h2>
            <p>I design experiences. I've always been interested in how things work. In how we as humans interact with
                our environment. This curiosity mixed with my love for technology has propelled me in the direction of
                experience design.</p>
            <p>I'm in love with beer, *BURRP* I mean design, and there's no going back. I'm dedicated to what I do and will work with
                whatever I have to make the best experience possible for the user. When I'm not coding or designing I
                can usually be found getting lost on my bike. The Universe is good.</p>
        </div>
    </section>
    <section id="work">
        <div class="work-wrap">
            <h2>Seriously, I Hand Picked This Shit.</h2>
        </div>
    </section>
    <section id="contact">
        <div class="contact-wrap">
            <h2>I'm Ready to Get <a href="https://www.youtube.com/watch?v=4ctK1aoWuqY" target="_blank" rel="noopener">SCHWIFTY!</a>
            </h2>
            <p>I could always use some more money so if you're the *BURRP* type who likes getting what they pay for
                then beam me up Scotty! Just *BUURRRRP* email me at the address right chia: <strong><em>gabe @ gabeneri
                        com</em></strong>. I'll be sure to fix you right up.</p>
        </div>
    </section>
</main>
<?php
//get the footer element and close the open body and html tags
include_once('footer.php');
?>
