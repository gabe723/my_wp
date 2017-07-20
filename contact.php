<?php
$page = 'contact';
require('db-config.php');
//use _once on function definitions to prevent duplicates
include_once('functions.php');
//get the doctype and the header element
include_once('header.php');
?>
</div>
<main id="content">
    <!-- Contact -->
    <section id="<?php echo $page; ?>">
        <h2>Contact</h2>
        <p>gneri723@gmail.com</p>
    </section>
</main>
<?php
//get the footer element and close the open body and html tags
include_once('footer.php');
?>
