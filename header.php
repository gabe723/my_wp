<?php
security_check();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- makes sure content does not shrink in mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title><?php dynamic_title($page); ?></title>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lato:300,400"/>
    <link rel="stylesheet" type="text/css" href="css/normalize.css"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="alternate" type="application/rss+xml" href="rss.php">
    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/images/favicon.ico" type="image/x-icon">
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/jquery.validate_t.js"></script>
    <script src="js/validTests.js"></script>
</head>
<body id="page-<?php echo $page; ?>" role="content" class="template-<?php echo $page; ?> header-menu-open">
<div class="site-container">
    <div class="header-wrap">
        <header id="header" class="header" role="header">
            <?php include_once('global-nav.php'); ?>
        </header>
    </div>
