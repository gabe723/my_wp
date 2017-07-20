<?php
$page = 'sitemap';
require('db-config.php');
//use _once on function definitions to prevent duplicates
include_once('functions.php');
//get the doctype and the header element
include_once('header.php');
?>
</div>
<main id="content">
	<section id="<?php echo $page; ?>">
		<h2>Sitemap</h2>
		<nav class="<?php echo $page; ?>-nav">
			<ul class="<?php echo $page; ?>-ul">
				<li>
					<a href="http://localhost/neri_gabe_portfolio/index#work.php">Work</a>
	      </li>
	      <li>
	        <a href="http://localhost/neri_gabe_portfolio/about.php">About</a>
	      </li>
	      <li>
	        <a href="http://localhost/neri_gabe_portfolio/contact.php">Contact</a>
	      </li>
			</ul>
		</nav>
	</section>
</main>
<?php
//get the footer element and close the open body and html tags
include_once('footer.php');
?>
