<!doctype html>
<html>
<head>

    <title>Tea Advisory Panel (TAP) - Search results</title>
    <?php include_once('includes/header-resources.php'); ?>

</head>
<body id="miscellaneous" class="search">
    <div class="header">
        <?php include_once('includes/header-content.php'); ?>
    </div>
    <div class="body">

        <div class="container">
            <div class="page-padding">
                <h2 class="title uppercase">Search results</h2>
                <div style="height: 600px"></div>
            </div>
        </div>

        <?php include_once('includes/forum-bar.php'); ?>
        <?php include_once('includes/subscription-bar.php'); ?>
    </div>

    <?php include_once('includes/footer-html.php'); ?>

    <nav id="mobileNav">
        <!-- TODO: Mr Curle, please repeat nav in PHP, js library not working on DOM just HTML :( -->
        <?php include_once('includes/mobile-nav.php'); ?>
    </nav>

    <?php include_once('includes/footer-resources.php'); ?>

</body>
</html>