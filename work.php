<?php
$page = 'work';
require('db-config.php');
//use _once on function definitions to prevent duplicates
include_once('functions.php');
//get the doctype and the header element
include_once('header.php');
//extract and sanitize the keywords that the user is searching for
?>
<main id="content" class="cf">
    <section id="atf_<?php echo $page; ?>_cta1">
        <div class="container">WORK GOES HERE</div>
    </section>
</main>

